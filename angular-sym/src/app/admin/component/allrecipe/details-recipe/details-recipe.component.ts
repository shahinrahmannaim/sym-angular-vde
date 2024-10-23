import { Component, OnInit } from '@angular/core';
import { ActivatedRoute,Router, RouterModule } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { CommonModule, JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-admin-details-recipe',
  standalone: true,
  imports: [JsonPipe,FormsModule, CommonModule,RouterModule],
  templateUrl: './details-recipe.component.html',
  styleUrls: ['./details-recipe.component.css'] // Fix the styleUrl to styleUrls
})
export class DetailsRecipeComponent implements OnInit {

  recipeId: string | null = null;
  recipe: any = null;
  recipeList: any[] = []; // Initialize this list with actual data if possible

  constructor(
    private route: ActivatedRoute,
    private router:Router,
    private http: HttpClient
  ) {}

  ngOnInit(): void {
    // Get the recipe id from the route parameter
    this.recipeId = this.route.snapshot.paramMap.get('id');
    
    // Fetch the recipe list and find the specific recipe by ID
    // this.fetchRecipeList();

    if(this.recipeId){
      this.fetchRecipeDetails(this.recipeId);
    }
  }

  fetchRecipeDetails(id: string) {
    this.http.get(`http://localhost:8000/api/recette/${id}`).subscribe(
      (res: any) => {
        // Convert date fields if they exist
        if (res.createdAt && res.createdAt.date) {
          res.createdAt = new Date(res.createdAt.date);
        }
        if (res.updatedAt && res.updatedAt.date) {
          res.updatedAt = new Date(res.updatedAt.date);
        }
  
        // Update the thumbnailFile to prepend the correct base URL
        if (res.thumbnailFile) {
          res.thumbnailFile = `http://localhost:8000/${res.thumbnailFile}`;
        }
  
        // Set the fetched recipe data to the component variable
        this.recipe = res;
        console.log(res);
      },
      (error) => {
        console.error('Error fetching recipe details:', error);
      }
    );
  }
  
  onEdit(recipeId: number): void {
    this.router.navigate(['admin/recipe/edit', recipeId]);
  }
 

  deleteRecipe() {
    // Implement deletion logic here
    if (this.recipeId) {
      const id = parseInt(this.recipeId, 10);
      this.http.delete(`http://localhost:8000/api/recette/delete/${id}`).subscribe(() => {
        // Optionally, redirect or update the UI after deletion
        alert('Recipe deleted successfully!');
        this.router.navigate(['admin/recipes']);
      }, (error) => {
        console.error('Error deleting recipe:', error);
      });
    }
   
  }

  
}
