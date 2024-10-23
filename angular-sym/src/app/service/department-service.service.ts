import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DepartmentService {
  private apiUrl = 'http://localhost:8000/departments'; // Adjust the base URL accordingly

  constructor(private http: HttpClient) {}

  getDepartments(): Observable<any[]> {
    return this.http.get<any[]>(this.apiUrl);
  }

  createDepartment(department: any): Observable<any> {
    return this.http.post<any>(`${this.apiUrl}/create`, department);
  }

  updateDepartment(id: number, department: any): Observable<any> {
    return this.http.put<any>(`${this.apiUrl}/edit/${id}`, department);
  }

  deleteDepartment(id: number): Observable<any> {
    return this.http.delete<any>(`${this.apiUrl}/delete/${id}`);
  }

  getDepartment(id: number): Observable<any> {
    return this.http.get<any>(`${this.apiUrl}/${id}`);
  }
}
