import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Router } from '@angular/router';
import { DepartmentService } from '../service/department-service.service';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { LayoutComponent } from '../layout/layout.component';

@Component({
  selector: 'app-signup',
  standalone: true,
  imports: [FormsModule, HttpClientModule, CommonModule, LayoutComponent],
  templateUrl: 'signup.component.html',
  styleUrls: ['signup.component.css']
})
export class SignupComponent implements OnInit {
  signupData = {
    username: '',
    email: '',
    password: '',
    departmentId: null // Added to hold department selection
  };

  departments: any[] = [];

  constructor(
    private http: HttpClient,
    private router: Router,
    private departmentService: DepartmentService
  ) {}

  ngOnInit() {
    // Fetch departments
    this.departmentService.getDepartments().subscribe(
      (data) => {
        this.departments = data;
        console.log('Departments fetched:', this.departments);
      },
      (error) => {
        console.error('Error fetching departments:', error);
      }
    );
  }
  onSignup() {
    const payload = {
      username: this.signupData.username,
      email: this.signupData.email,
      password: this.signupData.password,
      department_id: this.signupData.departmentId // Include department ID in the payload
    };
  
    this.http.post('http://localhost:8000/api/register/test', payload).subscribe(
      (res: any) => {
        console.log('Signup successful', res);
        alert('Signup successful! You can now log in.');
        this.router.navigate(['/login']);
      },
      (error) => {
        // Handle errors based on the status code and response message
        if (error.error && error.error.error) {
          alert('Error: ' + error.error.error);
        } else if (error.error && error.error.message) {
          alert('Error: ' + error.error.message);
        } else {
          alert('Signup failed. Please try again. Error: ' + (error.message || 'Unknown error'));
        }
        console.error('Error during signup:', error);
      }
    );
  }
  

 
}
