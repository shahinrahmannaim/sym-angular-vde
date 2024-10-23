import { Injectable } from '@angular/core';
import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
import { Observable } from 'rxjs';
import { JWTTokenService } from './jwt-token.service';

@Injectable({
  providedIn: 'root'
})
export class authGuard implements CanActivate {

  constructor(private router: Router, private jwtService: JWTTokenService) {}

  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot
  ): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {

    // Get the token from JWT service
    const token = this.jwtService.getToken();
    const expiredToken = this.jwtService.isTokenExpired();

    if (token) {
      if (expiredToken) {
        // Token is expired, clear it and redirect to login
        this.jwtService.clearToken();
        this.router.navigate(['/login']);
        return false; // Stop further execution
      }

      // Decode the token
      const decodedToken = this.jwtService.getDecodeToken();

      if (decodedToken) {
        const roles = this.jwtService.extractRoles(decodedToken) || [];
        const requiredRole = route.data['role']; // Adjusted to single 'role' as per your routes

        // Check if the user is an admin (allowing full access)
        if (roles.includes('ROLE_ADMIN')) {
          return true;
        }

        // Check if the user has the required role
        if (requiredRole && roles.includes(requiredRole)) {
          return true; // Allow access if the required role is present
        }

        // Redirect to 'forbidden' if roles don't match
        this.router.navigateByUrl('/forbidden');
        return false;
      } else {
        // Token cannot be decoded (e.g., invalid), redirect to login
        this.router.navigate(['/login']);
        return false;
      }
    }

    // No token found, redirect to login
    this.router.navigate(['/login']);
    return false;
  }
}
