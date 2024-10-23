import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CommonModule, JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import { DepartmentService } from '../../../../service/department-service.service';

@Component({
  selector: 'app-show-users',
  standalone: true,
  imports: [CommonModule, JsonPipe, FormsModule],
  templateUrl: './show-users.component.html',
  styleUrls: ['./show-users.component.css']
})
export class ShowUsersComponent implements OnInit {
  users: any[] = [];
  departments: any[] = [];
  roles: string[] = ['ROLE_USER', 'ROLE_ADMIN']; // Add your roles here
  user: any = { id: null, username: '', email: '', departmentId: null, role: '', password: '' };
  isEditMode: boolean = false;

  constructor(private http: HttpClient, private router: Router, private departmentService: DepartmentService) {}

  ngOnInit() {
    this.fetchUsers();
    this.fetchDepartments();
  }

  fetchUsers() {
    this.http.get<any[]>('http://localhost:8000/api/admin/users').subscribe(
      (data) => {
        this.users = data.map(user => ({
          ...user,
          roles: user.roles.join(', ') // Convert roles array to a string for display
        }));
      },
      (error) => {
        console.error('Error fetching users', error);
      }
    );
  }

  fetchDepartments() {
    this.departmentService.getDepartments().subscribe(
      (data) => {
        this.departments = data;
      },
      (error) => {
        console.error('Error fetching departments', error);
      }
    );
  }

  addUser() {
    const payload = {
      username: this.user.username,
      email: this.user.email,
      password: this.user.password,
      department_id: this.user.departmentId, // Include department ID in the payload
      role: this.user.role // Make sure to include the role as well
    };
  
    this.http.post('http://localhost:8000/api/admin/user/create', payload).subscribe(
      (response) => {
        alert('User added successfully!');
        this.clearForm();
        this.fetchUsers();
      },
      (error) => {
        console.error('Error adding user:', error);
        alert('Error adding user. Please try again.');
      }
    );
  }
  
  editUser(id: number) {
    this.isEditMode = true;
    this.http.get<any>(`http://localhost:8000/api/admin/user/${id}`).subscribe(
      (data) => {
        this.user = { 
          id: data.id, 
          username: data.username, 
          email: data.email, 
          departmentId: data.department ? data.department.id : null, // Set departmentId
          role: data.roles && data.roles.length > 0 ? data.roles[0] : '', // Set role
          password: '' // Keep password blank for security
        };
      },
      (error) => {
        console.error('Error fetching user details', error);
      }
    );
  }

  updateUser() {
    const payload = {
      username: this.user.username,
      email: this.user.email,
      department_id: this.user.departmentId, // Send department ID as department_id
      roles: [this.user.role], // Send roles as an array
      password: this.user.password || undefined // Send password only if it's provided
    };
  
    this.http.put(`http://localhost:8000/api/admin/user/edit/${this.user.id}`, payload).subscribe(
      (response) => {
        alert('User updated successfully!');
        this.clearForm();
        this.fetchUsers();
        this.isEditMode = false;
      },
      (error) => {
        console.error('Error updating user:', error);
      }
    );
  }
  
  deleteUser(id: number) {
    if (confirm('Are you sure you want to delete this user?')) {
      this.http.delete(`http://localhost:8000/api/admin/users/delete/${id}`).subscribe(
        () => {
          alert('User deleted successfully!');
          this.fetchUsers();
        },
        (error) => {
          console.error('Error deleting user:', error);
        }
      );
    }
  }

  clearForm() {
    this.user = { id: null, username: '', email: '', departmentId: null, role: '', password: '' };
    this.isEditMode = false;
  }
}
