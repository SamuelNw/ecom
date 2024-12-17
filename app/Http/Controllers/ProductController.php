<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Search for products based on name or description.
     */
    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Ensure the query is not empty
        if (empty($query)) {
            return response()->json([
                'message' => 'No search term provided.'
            ], 400);
        }

        // Perform the search using LIKE for matching name and description
        $results = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orderBy('name')
            ->limit(20)
            ->get();

        // Return the results as JSON
        // return response()->json($results);

        return view('search.results', compact('results'));
    }
}
