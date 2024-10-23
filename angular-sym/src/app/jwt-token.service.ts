import { Injectable } from '@angular/core';
import { jwtDecode } from 'jwt-decode'; // Correct import

@Injectable({
  providedIn: 'root'
})
export class JWTTokenService {

  private jwtToken: string | null = null;
  private decodedToken: { [key: string]: any } | null = null;

  constructor() { }

  // Set the JWT token and save it to localStorage
  setToken(token: string): void {
    if (token) {
      this.jwtToken = token;
      localStorage.setItem('sym-api', token); // Save the token in localStorage
    }
  }

  // Load token from localStorage
  getToken(): string | null {
    if (!this.jwtToken) {
      this.jwtToken = localStorage.getItem('sym-api'); // Load from localStorage if not set
    }
    return this.jwtToken;
  }

  // Decode the token if available
  decodeToken(): void {
    const token = this.getToken(); // Ensure we load the token
    if (token) {
      this.decodedToken = jwtDecode(token);
    }
  }

  // Get the decoded token
  getDecodeToken(): { [key: string]: any } | null {
    if (!this.decodedToken) {
      this.decodeToken();
    }
    return this.decodedToken;
  }

  // Get specific information from the token (e.g., user)
  getUser(): string | null {
    const decoded = this.getDecodeToken();
    return decoded ? decoded['username'] : null;
  }

  // Get the expiry time of the token
  getExpiryTime(): number | null {
    const decoded = this.getDecodeToken();
    return decoded ? parseInt(decoded['exp'], 10) : null;
  }

  // Check if the token is expired
  isTokenExpired(): boolean {
    const expiryTime: number | null = this.getExpiryTime();
    if (expiryTime) {
      return new Date().getTime() > expiryTime * 1000;
    }
    return false;
  }

  // Utility to extract roles from the token
  extractRoles(decodedToken: { [key: string]: any }): string[] {
    const roles = decodedToken?.['roles'];
    if (typeof roles === 'string') {
      return [roles];
    } else if (Array.isArray(roles)) {
      return roles;
    }
    return [];
  }

  // Clear the token on logout
  clearToken(): void {
    localStorage.removeItem('sym-api');
    this.jwtToken = null;
    this.decodedToken = null;
  }
}