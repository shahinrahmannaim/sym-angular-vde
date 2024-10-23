import { CommonModule } from '@angular/common';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterModule } from '@angular/router';

@Component({
  selector: 'app-add-recipe',
  standalone: true,
  imports: [FormsModule, CommonModule, RouterModule],
  templateUrl: './add-recipe.component.html',
  styleUrls: ['./add-recipe.component.css']
})
export class AddRecipeComponent {
  thumbnailFile: File | null = null;  // Class property to store the selected file

  constructor(
    private http: HttpClient,
    private router: Router
  ) {}

  // Handle file selection
  onFileSelected(event: any) {
    this.thumbnailFile = event.target.files[0];  // Store the selected file in the component
    console.log('File selected:', this.thumbnailFile);
  }

  // Handle form submission
  onSubmit(form: any) {
    if (form.valid) {
      const formData = new FormData();
      formData.append('title', form.value.title);
      
      if (this.thumbnailFile) {
        formData.append('thumbnailFile', this.thumbnailFile);  // Append the file only if it's selected
      } else {
        console.log('No thumbnail file selected');
      }

      formData.append('duration', form.value.duration);
      formData.append('content', form.value.content);
      formData.append('category', form.value.category);

      console.log('Form validity:', form.valid);
      console.log('Form values:', form.value);
      
      this.http.post('http://localhost:8000/api/recette/create', formData).subscribe(
        (res: any) => {
          console.log('Recipe added successfully', res);
          this.router.navigate(['recipes']);
        },
        (error) => {
          console.error('Error adding recipe:', error);
          if (error.status === 401) {
            alert('Unauthorized. Please log in again.');
            this.router.navigate(['/login']);
          } else if (error.status === 500) {
            alert('An error occurred on the server. Please check the backend logs.');
          } else {
            alert('An error occurred. Please check the console for details.');
          }
        }
      );
    } else {
      console.log('Form is invalid');
    }
  }
}
