import { CommonModule, JsonPipe } from '@angular/common';
import { HttpClient,} from '@angular/common/http'; 
import { Component, OnInit, inject } from '@angular/core';

import { Router, RouterModule } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [CommonModule,JsonPipe,RouterModule], 
  
templateUrl: 'dashboard.component.html',
  styleUrls: ['dashboard.component.css']
})
export class DashboardComponent implements OnInit {

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
    
    if(recipe && recipe.id){

      this.router.navigate(['/recipe',recipe.id])
    
  }else{
    console.error('Invalid recipe or ID');
  }

}

}
