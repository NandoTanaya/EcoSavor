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
        $data = Category::all();

        return view('admin.category', compact('data'));
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

        /**
         * Tambah buat notif toastr kalau berhasil add category
         */
        toastr()->timeOut(10000)->closeButton()->addSuccess('
        Category Added Successfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('
        Category Deleted Successfully');

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('
        Category Updated Successfully');

        return redirect('/view_category');
    }
}
