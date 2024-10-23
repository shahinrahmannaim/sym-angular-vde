import { CommonModule, JsonPipe } from '@angular/common';
import { HttpClient } from '@angular/common/http'; 
import { Component, OnInit, inject } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterModule } from '@angular/router';

@Component({
  selector: 'app-show-recipe',
  standalone: true,
  imports: [CommonModule,JsonPipe,FormsModule,RouterModule], 
  
templateUrl: 'showrecipe.component.html',
  styleUrls: ['showrecipe.component.css']
})
export class ShowRecipeComponent implements OnInit {

  http = inject(HttpClient); // Inject HttpClient
  router = inject(Router);
  recipeList: any[] = []; // Holds the recipe data
  

  ngOnInit(): void {
    this.getRecipe()
  }


  getRecipe() {
    this.http.get('http://localhost:8000/api/recette').subscribe(
      (res: any) => {
        if (Array.isArray(res)) {
          this.recipeList = res.map((recipe) => {
            // Update the thumbnailFile with the correct full URL
            if (recipe.thumbnailFile) {
              recipe.thumbnailFile = `http://localhost:8000/${recipe.thumbnailFile}`;
            }
            return recipe;
          });
        } else {
          this.recipeList = [];
        }
        console.log(this.recipeList);
      },
      (error: any) => {
        console.log(error);
        this.recipeList = [];
      }
    );
  }

  goToRecipe(recipe:any){
    console.log('clicked');
    if(recipe && recipe.id){

      this.router.navigate(['admin/recipe',recipe.id])
    
  }else{
    console.error('Invalid recipe or ID');
  }

}

}
