<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $rootCategories = $category->rootCategories();
        return view('category', ['rootCategories' => $rootCategories,]);
    }

    public function show()
    {
        $categories = Category::all();
        return view('categoryFlat', ['categories' => $categories]);
    }

    
}
