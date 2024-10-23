import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { Router, RouterModule } from '@angular/router';
import { JWTTokenService } from '../../../jwt-token.service';


@Component({
  selector: 'app-admin-dashboard',
  standalone: true,
  imports: [CommonModule,RouterModule],
  templateUrl: './admin-dashboard.component.html',
  styleUrls: ['admin-dashboard.component.css']
})
export class AdminDashboardComponent {
  adminname: string | null = null;

  constructor(
    private router: Router,
    private jwtService: JWTTokenService
  ) { }

  ngOnInit(): void {
    this.adminname = this.jwtService.getUser();
    console.log('Logged in user:', this.adminname);
  }

  isLoggedIn(): boolean {
    return this.jwtService.getToken() !== null;
  }

  onLogout(): void {
    // this.jwtService.setToken(null); // This will work if you updated setToken
   this.jwtService.clearToken();
    this.router.navigate(['login']);
  }
}
