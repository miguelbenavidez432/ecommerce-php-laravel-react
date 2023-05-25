<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function register(Request $request ){

        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->status = $request->input('status');
        $category->save();
        return response()->json([
            'status'=> 200,
            'message' => 'Categoría agregada correctamente'
        ]);
    }
    //
}
