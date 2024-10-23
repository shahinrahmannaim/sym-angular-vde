import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router, RouterModule } from '@angular/router';
import { CategoryService } from '../admin/services/category-service/category.service';



@Component({
  selector: 'app-edit-recipe',
  standalone: true,
  imports: [FormsModule, CommonModule, RouterModule],
  templateUrl: './edit-recipe.component.html',
  styleUrls: ['./edit-recipe.component.css']
})
export class EditRecipeComponent implements OnInit {
  recipeId: string | null = null;
  recipe: any = {
    title: '',
    thumbnailFile: null,
    duration: '',
    content: '',
    category: ''
  };
  categories: any[]=[]

  constructor(
    private http: HttpClient,
    private route: ActivatedRoute,
    private router: Router,
    private categoryService: CategoryService
  ) {}

  ngOnInit(): void {
    this.recipeId = this.route.snapshot.paramMap.get('id');
    if (this.recipeId) {
      this.fetchRecipeDetails(this.recipeId);
    }
    this.fetchCategories();
  }

  fetchRecipeDetails(id: string) {
    this.http.get(`http://localhost:8000/api/recette/${id}`).subscribe(
      (res: any) => {
      
        this.recipe = res;
       
      res.updatedAt = new Date(res.updatedAt);
      },
      (error) => {
        console.error('Error fetching recipe details:', error);
      }
    );
  }
  fetchCategories(){
    this.categoryService.getCategories().subscribe((data:any[])=>
    {this.categories=data},
    (error)=>{
      console.error('Error fetching Categories',error)
    }
    )
  }

  onFileChange(event: Event) {
    const input = event.target as HTMLInputElement;
    if (input.files && input.files.length > 0) {
      this.recipe.thumbnailFile = input.files[0]; // Update recipe thumbnail
    } else {
      console.error('No file selected or file input is undefined');
    }
  }

  onSubmit(form: any) {
    if (form.valid) {
      const formData = new FormData();
      formData.append('title', this.recipe.title);
      formData.append('thumbnailFile', this.recipe.thumbnailFile); // Use the updated recipe thumbnail
      formData.append('duration', this.recipe.duration);
      formData.append('content', this.recipe.content);
      formData.append('category', this.recipe.category);

      this.http.post(`http://localhost:8000/api/recette/edit/${this.recipeId}`, formData).subscribe(
        (res: any) => {
          console.log('Recipe updated successfully', res);
          alert('Recipe updated successfully');
          this.router.navigate(['admin/recipes']);
        },
        (error) => {
          console.error('Error updating recipe:', error);
          alert('An error occurred while updating the recipe. Please check the console for details.');
        }
      );
    }
  }
}
