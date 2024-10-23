import { HttpInterceptorFn } from '@angular/common/http';
import { JWTTokenService } from './jwt-token.service'; // Adjust the import path as needed
import { Observable } from 'rxjs';

export const CustomInterceptor: HttpInterceptorFn = (req, next) => {
  // Create an instance of JWTTokenService
  const jwtService = new JWTTokenService();

  // Get the token using the JWTTokenService
  const token = jwtService.getToken(); // Ensure this method exists in your JWTTokenService


  console.log('Interceptor triggered');
  console.log('Token:', token); // Log the token for debugging

 
  const clonedReq = req.clone({
    setHeaders: {
      Authorization: `Bearer ${token}`
    }
  });

  // Pass the cloned request to the next handler
  return next(clonedReq);
};
