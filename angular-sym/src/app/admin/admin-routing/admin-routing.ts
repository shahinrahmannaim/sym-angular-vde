import { Routes } from '@angular/router';
import { AdminDashboardComponent } from '../component/admin-dashboard/admin-dashboard.component';
import { ShowUsersComponent} from '../component/alluser/showuser/showusers.component';
import { ShowRecipeComponent } from '../component/allrecipe/showrecipe/showrecipe.component';
import { authGuard } from '../../auth.guard';
import { DetailsRecipeComponent } from '../component/allrecipe/details-recipe/details-recipe.component';
import { AddRecipeComponent } from '../component/allrecipe/add-recipe/add-recipe.component';
import { EditRecipeComponent } from '../component/allrecipe/edit-recipe/edit-recipe.component';
import { CategoryComponent } from '../component/category/category.component';
import { DepartmentComponent } from '../component/department/department.component';






export const adminRoutes: Routes = [
  {
    path: 'admin',
    component: AdminDashboardComponent,
    canActivate: [authGuard],
    data: { role: 'ROLE_ADMIN' } ,
    children: [
      { path: 'recipes', component: ShowRecipeComponent },
      { path: 'recipe/:id', component: DetailsRecipeComponent },
      { path: 'recipe/edit/:id', component: EditRecipeComponent},
      { path: 'add-recipe', component: AddRecipeComponent },
      { path: 'users', component: ShowUsersComponent },
      { path: 'departments', component: DepartmentComponent },
      { path: 'categories', component: CategoryComponent },
      { path: '', redirectTo: 'recipes', pathMatch: 'full' }
    ]
  }
];
