import { Component, OnInit } from '@angular/core';
import { CommonModule, JsonPipe } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { CategoryService } from '../../services/category-service/category.service';

@Component({
  selector: 'app-admin-category',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {
  categories: any[] = [];
  newCategory = { name: '' };
  editMode: boolean = false;
  currentCategoryId: number | null = null;

  constructor(private categoryService: CategoryService) {}

  ngOnInit(): void {
    this.getCategories();
  }

  // Fetch all categories
  getCategories() {
    this.categoryService.getCategories().subscribe(
      (data: any[]) => {
        this.categories = data;
      },
      (error) => {
        console.error('Error fetching categories:', error);
      }
    );
  }

  // Add a new category
  addCategory() {
    if (this.newCategory.name) {
      this.categoryService.createCategory(this.newCategory).subscribe(
        () => {
          alert('Category added successfully!');
          this.newCategory.name = ''; // Reset the form
          this.getCategories(); // Refresh the list
        },
        (error) => {
          console.error('Error adding category:', error);
        }
      );
    }
  }

  // Edit an existing category
  editCategory(category: any) {
    this.editMode = true;
    this.currentCategoryId = category.id;
    this.newCategory.name = category.name;
  }

  // Update the category
  updateCategory() {
    if (this.currentCategoryId && this.newCategory.name) {
      this.categoryService.updateCategory(this.currentCategoryId, this.newCategory).subscribe(
        () => {
          alert('Category updated successfully!');
          this.editMode = false;
          this.newCategory.name = '';
          this.currentCategoryId = null;
          this.getCategories(); // Refresh the list
        },
        (error) => {
          console.error('Error updating category:', error);
        }
      );
    }
  }

  // Delete a category
  deleteCategory(id: number) {
    if (confirm('Are you sure you want to delete this category?')) {
      this.categoryService.deleteCategory(id).subscribe(
        () => {
          alert('Category deleted successfully!');
          this.getCategories(); // Refresh the list
        },
        (error) => {
          console.error('Error deleting category:', error);
        }
      );
    }
  }
}
