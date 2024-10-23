import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router, RouterModule } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { CommonModule, JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-edit-user',
  standalone: true,
  imports: [CommonModule,JsonPipe,FormsModule,RouterModule], 
  templateUrl: './edit-user.component.html',
  styleUrls: ['./edit-user.component.css']
})
export class EditUserComponent implements OnInit {
  userObj: any = {
    username: '',
    email: '',
    department: '',
    role: ''
  };
  userId: number;

  constructor(private http: HttpClient, private route: ActivatedRoute, private router: Router) {
    this.userId = Number(this.route.snapshot.paramMap.get('id'));
  }

  ngOnInit() {
    this.fetchUser();
  }

  fetchUser() {
    this.http.get(`http://localhost:8000/api/users/${this.userId}`).subscribe(
      (data) => {
        this.userObj = data;
      },
      (error) => {
        console.error('Error fetching user', error);
      }
    );
  }

  onSubmit() {
    this.http.put(`http://localhost:8000/api/users/${this.userId}`, this.userObj).subscribe(
      () => {
        alert('User updated successfully!');
        this.router.navigate(['/admin/users']);
      },
      (error) => {
        console.error('Error updating user', error);
        alert('Failed to update user.');
      }
    );
  }
}
