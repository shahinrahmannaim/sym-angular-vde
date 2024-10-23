import { Component } from '@angular/core';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Router, RouterModule } from '@angular/router';
import { JWTTokenService } from '../jwt-token.service';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { LayoutComponent } from '../layout/layout.component';

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [FormsModule, CommonModule,LayoutComponent],
  templateUrl: 'login.component.html',
  styleUrls: ['login.component.css']
})
export class LoginComponent {

  loginObj: any = {
    email: "",
    password: ""
  };
  

  constructor(
    private http: HttpClient,
    private router: Router,
    private jwtService: JWTTokenService
  ) { }

  onLogin() {
    this.http.post('http://localhost:8000/api/login', this.loginObj).subscribe(
      (res: any) => {
        console.log('Response from API:', res);
  
        if (res.token) {
          // Set token and decode it
          this.jwtService.setToken(res.token);
          this.jwtService.decodeToken();
  
          // Extract roles
          const roles = this.jwtService.extractRoles(this.jwtService.getDecodeToken() || []);
          console.log('Extracted roles:', roles);
  
          // Check for roles
          if (roles.includes('ROLE_ADMIN')) {
            this.router.navigate(['/admin']);
            alert('Admin login success');
            return;  // Exit the function after admin login
          }
  
          if (roles.includes('ROLE_USER')) {
            this.router.navigate(['/recipes']);
            alert('User login success');
            return;  // Exit the function after user login
          }
  
          // If no valid role is found, show an error
          alert('No valid role found');
          this.router.navigate(['/login']);
          
        } else {
          alert("Login failed - no token provided");
        }
      },
      (error) => {
        // Handle the case where the user does not exist
        if (error.status === 404) {
          alert('User does not exist');
        } else {
          console.error('Error during login:', error);
          alert('Incorrect User Credentials');
        }
      }
    );
  }
  
  
}
