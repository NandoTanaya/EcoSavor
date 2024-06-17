<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Untuk add category
 */
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }

    /**
     * Untuk post pakai Request $request itu
     */
    public function add_category(Request $request)
    {
        $category = new Category;

        /**
         * Tulisannya yang abis "->" kan "category" itu didapet dari file category.blade.php
         * yang ada input text namenya category (itu yang dipake)
         */
        $category->category_name = $request->category;

        $category->save();

        return redirect()->back();
    }
}
