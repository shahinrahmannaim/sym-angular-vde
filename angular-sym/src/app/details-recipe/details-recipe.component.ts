import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router, RouterModule } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { CategoryService } from '../admin/services/category-service/category.service';
 

@Component({
  selector: 'app-details-recipe',
  standalone: true,
  imports: [FormsModule, CommonModule, RouterModule],
  templateUrl: './details-recipe.component.html',
  styleUrls: ['./details-recipe.component.css']
})
export class DetailsRecipeComponent implements OnInit {
  recipeId: string | null = null;
  recipe: any = null;
  categoryName: string | null = null;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private http: HttpClient,
    private categoryService: CategoryService // Inject CategoryService
  ) { }

  ngOnInit(): void {
    this.recipeId = this.route.snapshot.paramMap.get('id');
    if (this.recipeId) {
      this.fetchRecipeDetails(this.recipeId);
    }
  }

  fetchRecipeDetails(id: string) {
    this.http.get(`http://localhost:8000/api/recette/${id}`).subscribe(
      (res: any) => {
        if (res.createdAt && res.createdAt.date) {
          res.createdAt = new Date(res.createdAt.date);
        }
        if (res.updatedAt && res.updatedAt.date) {
          res.updatedAt = new Date(res.updatedAt.date);
        }

        if (res.thumbnailFile) {
          res.thumbnailFile = `http://localhost:8000/${res.thumbnailFile}`;
        }

        this.recipe = res;

        // Fetch category details if category ID is available
        if (res.category) {
          this.fetchCategory(res.category);
        }
      },
      (error) => {
        console.error('Error fetching recipe details:', error);
      }
    );
  }

  fetchCategory(categoryId: number) {
    this.categoryService.getCategory(categoryId).subscribe(
      (category) => {
        this.categoryName = category.name;
      },
      (error) => {
        console.error('Error fetching category:', error);
      }
    );
  }

  onEdit(recipeId: number): void {
    this.router.navigate(['/recipe/edit', recipeId]);
  }

  deleteRecipe() {
    if (this.recipeId) {
      const id = parseInt(this.recipeId, 10);
      this.http.delete(`http://localhost:8000/api/recette/delete/${id}`).subscribe(
        () => {
          alert('Recipe deleted successfully!');
          this.router.navigate(['/recipes']);
        },
        (error) => {
          console.error('Error deleting recipe:', error);
        }
      );
    }
  }
}
