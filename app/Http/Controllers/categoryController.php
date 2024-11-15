<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function category() {
        return view('category', [
            'category' => Category::get()
        ]);
    }

    public function categoryStore(Request $request) 
    {
        Category::create([
            'name' => $request->name,
        ]);

        return redirect('/category');
    }

    public function categoryEdit($id) {
        $category = Category::find($id);
        return view('categoryEdit',['category' => $category]);
     }
 
     public function categoryUpdate(Request $request, string $id) {
         
         $category = Category::find($id);
 
         $category->update([
             'name' => $request->name,
         ]);
 
         return redirect('/category');
     }
 
     public function categoryDestroy(string $id) 
     {
         $category = Category::find($id);
         $category->delete();
 
         return redirect('/category');
     }
}
