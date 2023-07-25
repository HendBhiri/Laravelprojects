<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        $categories = Category::all();
        $filteredCategoryId = $request->input('category_id');
        if ($filteredCategoryId) {
            $products = Product::where('category_id', $filteredCategoryId)->get();
        } else {
            $products = Product::all();
        }
        return view('products.index', compact('products', 'categories'));
    }
}
