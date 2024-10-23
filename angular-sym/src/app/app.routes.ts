import { Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { LayoutComponent } from './layout/layout.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { DetailsRecipeComponent } from './details-recipe/details-recipe.component';
import { AddRecipeComponent } from './add-recipe/add-recipe.component';
import { EditRecipeComponent } from './edit-recipe/edit-recipe.component';
import { SignupComponent } from './signup/signup.component';
import { adminRoutes } from './admin/admin-routing/admin-routing';
import { authGuard } from './auth.guard'; // Ensure this is correctly imported


export const routes: Routes = [
  {
    path: 'signup',
    component: SignupComponent
  },
  {
    path: 'login',
    component: LoginComponent
  },
  {
    
    path: '',
    component: LayoutComponent,
    canActivate: [authGuard],
    data: { role: 'ROLE_USER' },
    children: [
      {
        path: 'recipe/:id',
        component: DetailsRecipeComponent
      },
      {
        path: 'recipe/edit/:id',
        component: EditRecipeComponent
      },
      {
        path: 'recipes',
        component: DashboardComponent
      },
      {
        path: 'add-recipe',
        component: AddRecipeComponent
      }
    ]
  },
  
  ...adminRoutes, // Spread the admin routes here
  { path: '', redirectTo: 'recipe', pathMatch: 'full' },  // Default redirect
  { path: '**', redirectTo: 'login' }  // Wildcard route for unmatched paths
];
