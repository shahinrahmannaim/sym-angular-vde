import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
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
          this.jwtService.setToken(res.token);
          this.jwtService.decodeToken();

          const roles = this.jwtService.extractRoles(this.jwtService.getDecodeToken() || []);
          console.log('Extracted roles:', roles);

          if (roles.includes('ROLE_ADMIN')) {
            this.router.navigate(['/admin']);
            alert('Admin login success');
            return;
          }

          if (roles.includes('ROLE_USER')) {
            this.router.navigate(['/recipes']);
            alert('User login success');
            return;
          }

          // alert('No valid role found');
          // this.router.navigate(['/login']);
        } else {
          alert("Login failed - no token provided");
        }
      },
      (error) => {
        console.log('Error response from API:', error);

        if (error.status === 403) {
          alert('Please verify your account by clicking the confirmation link in your email.');
        } else if (error.status === 404) {
          alert('User does not exist');
        } else {
          console.error('Error during login:', error);
          alert('Incorrect User Credentials');
        }
       
      }
    );
  }
}
