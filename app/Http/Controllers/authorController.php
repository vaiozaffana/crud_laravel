<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    public function index() {
        return view('index', [
            'author' => Author::get()
        ]);
    }

    public function store(Request $request) 
    {
        Author::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/');
    }

    public function edit($id) {
        $author = Author::find($id);
        return view('edit', ['author' => $author]);
     }
 
     public function update(Request $request, string $id) {
         
         $author = Author::find($id);
 
         $author->update([
             'name' => $request->name,
             'email' => $request->email,
             'password' => $request->password,
         ]);
 
         return redirect('/');
     }
 
     public function destroy(string $id) 
     {
         $author = Author::find($id);
         $author->delete();
 
         return redirect('/');
     }
}
