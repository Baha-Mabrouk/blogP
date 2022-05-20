<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
     
      @return \Illuminate\Http\Response
     
    public function index(Category $category)
    {
        $posts = $category->posts()
                          ->latest()
                          ->paginate(6);

        return view('posts.index', compact('posts', 'category'));
    }

 
      @return \Illuminate\Http\Response
     
    public function create()
    {
        //
    }


      @param  \Illuminate\Http\Request  $request
      @return \Illuminate\Http\Response
    
    public function store(Request $request)
    {
        //
    }

    
      @param  \App\Models\Category  $category
      @return \Illuminate\Http\Response
     
    public function show(Category $category)
    {
        //
    }

   
      @param  \App\Models\Category  $category
      @return \Illuminate\Http\Response
     
    public function edit(Category $category)
    {
        //
    }

   
      @param  \Illuminate\Http\Request  $request
      @param  \App\Models\Category  $category
      @return \Illuminate\Http\Response
     
    public function update(Request $request, Category $category)
    {
        //
    }

    
      @param  \App\Models\Category  $category
      @return \Illuminate\Http\Response
     
    public function destroy(Category $category)
    {
        //
    }
}
