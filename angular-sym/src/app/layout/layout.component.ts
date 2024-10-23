import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { Router, RouterModule } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';
import { JWTTokenService } from '../jwt-token.service';

@Component({
  selector: 'app-layout',
  standalone: true,
  imports: [RouterModule, CommonModule],
  templateUrl: 'layout.component.html',
  styleUrls: ['layout.component.css']
})
export class LayoutComponent implements OnInit {
  username: string | null = null;

  constructor(
    private router: Router,
    private jwtService: JWTTokenService
  ) { }

  ngOnInit(): void {
    this.username = this.jwtService.getUser();
    console.log('Logged in user:', this.username);
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
