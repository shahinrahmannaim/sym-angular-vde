import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { DepartmentService } from '../../../service/department-service.service';


@Component({
  selector: 'app-admin-department',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './department.component.html',
  styleUrls: ['./department.component.css']
})
export class DepartmentComponent implements OnInit {
  departments: any[] = [];
  newDepartment = { name: '' };
  editMode: boolean = false;
  currentDepartmentId: number | null = null;

  constructor(private departmentService:DepartmentService) {}

  ngOnInit(): void {
    this.getDepartments();
  }

  // Fetch all departments from the API
  getDepartments() {
    this.departmentService.getDepartments().subscribe(
      (data: any) => {
        this.departments = data;
        console.log(data)
      },
      (error) => {
        console.error('Error fetching departments:', error);
      }
    );
  }


  addDepartment() {
    if (this.newDepartment.name) {
      this.departmentService.createDepartment(this.newDepartment).subscribe(
        () => {
          alert('Department added successfully!');
          this.newDepartment.name = ''; // Reset the form
          this.getDepartments(); // Refresh the list
        },
        (error) => {
          console.error('Error adding department:', error);
        }
      );
    }
  }

  // Edit an existing department
  editDepartment(department: any) {
    this.editMode = true;
    this.currentDepartmentId = department.id;
    this.newDepartment.name = department.name;
  }

  // Update the department
  updateDepartment() {
    if (this.currentDepartmentId && this.newDepartment.name) {
      this.departmentService.updateDepartment(this.currentDepartmentId,this.newDepartment).subscribe(
        () => {
          alert('Department updated successfully!');
          this.editMode = false;
          this.newDepartment.name = '';
          this.currentDepartmentId = null;
          this.getDepartments(); // Refresh the list
        },
        (error) => {
          console.error('Error updating department:', error);
        }
      );
    }
  }

  // Delete a department
  deleteDepartment(id: number) {
    if (confirm('Are you sure you want to delete this department?')) {
      this.departmentService.deleteDepartment(id).subscribe(
        () => {
          alert('Department deleted successfully!');
          this.getDepartments(); // Refresh the list
        },
        (error) => {
          console.error('Error deleting department:', error);
        }
      );
    }
  }
}
