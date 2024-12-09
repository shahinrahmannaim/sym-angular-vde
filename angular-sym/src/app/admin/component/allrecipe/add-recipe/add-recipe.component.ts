import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { CategoryService } from '../../../services/category-service/category.service';

@Component({
  selector: 'app-admin-add-recipe',
  standalone: true,
  imports: [FormsModule, CommonModule],
  templateUrl: './add-recipe.component.html',
  styleUrls: ['./add-recipe.component.css']
})
export class AddRecipeComponent implements OnInit {
  recipe: any = {
    title: '',
    thumbnailFile: null,
    duration: '',
    content: '',
    category: ''
  };
  categories: any[] = []; // To hold the fetched categories

  constructor(
    private http: HttpClient,
    private router: Router,
    private categoryService: CategoryService
  ) {}

  ngOnInit(): void {
    this.fetchCategories(); // Fetch categories on initialization
  }

  fetchCategories() {
    this.categoryService.getCategories().subscribe(
      (data: any[]) => {
        this.categories = data;
      },
      (error) => {
        console.error('Error fetching categories:', error);
      }
    );
  }

  onFileChange(event: Event) {
    const input = event.target as HTMLInputElement;
    if (input.files && input.files.length > 0) {
      this.recipe.thumbnailFile = input.files[0]; // Assign file to the recipe's thumbnailFile property
    } else {
      console.error('No file selected or file input is undefined');
    }
  }

  onSubmit(form: any) {
    if (form.valid) {
      const formData = new FormData();
      formData.append('title', this.recipe.title);
      formData.append('thumbnailFile', this.recipe.thumbnailFile); // Thumbnail file
      formData.append('duration', this.recipe.duration);
      formData.append('content', this.recipe.content);
      formData.append('category', this.recipe.category); // Selected category

      this.http.post('http://localhost:8000/api/recette/create', formData).subscribe(
        (res: any) => {
          console.log('Recipe added successfully', res);
          alert('Recipe added successfully');
          this.router.navigate(['admin/recipes']);
        },
        (error) => {
          console.error('Error adding recipe:', error);
          alert('An error occurred while adding the recipe. Please check the console for details.');
        }
      );
    }
  }
}
