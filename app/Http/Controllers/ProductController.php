<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Get the search term from the request
        $search = $request->input('search');

        // Query to fetch products based on the search term
        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', "%{$search}%");
        })->get();

        // Pass the products and search term to the view
        return view('products.index', ['products' => $products]);
    }
}
