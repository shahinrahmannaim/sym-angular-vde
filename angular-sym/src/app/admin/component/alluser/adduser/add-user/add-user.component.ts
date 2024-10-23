import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router, RouterModule } from '@angular/router';
import { CommonModule, JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-add-user',
  standalone: true,
  imports: [CommonModule,JsonPipe,FormsModule,RouterModule], 
  templateUrl: './add-user.component.html',
  styleUrls: ['./add-user.component.css']
})
export class AddUserComponent {
  userObj = {
    username: '',
    email: '',
    department: '',
    role: ''
  };

  constructor(private http: HttpClient, private router: Router) {}

  onSubmit() {
    this.http.post('http://localhost:8000/api/users', this.userObj).subscribe(
      () => {
        alert('User added successfully!');
        this.router.navigate(['/admin/users']);
      },
      (error) => {
        console.error('Error adding user', error);
        alert('Failed to add user.');
      }
    );
  }
}
