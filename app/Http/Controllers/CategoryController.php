<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
       $categories = Category::paginate(5);
       return view('settings.category',compact('categories'));
   }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);
        Category::create([
            'name' => $request->name
        ]);

        return response()->json([
            'Succesfully created'
        ], 201);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);

        $category = Category::findOrFail($request->id);
        $category->update([
            'name' => $request->name
        ]);

        return response()->json([
            'Succesfully updated'
        ], 200);
    }

    public function delete(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->delete();
    }
}
