<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Support\Str;

class CategoryController extends Controller
{



    public function getCategory($slug)
    {


        $category =  Category::where('slug', '=', $slug)->value('id');


        $posts = Post::where('category_id', '=', $category)->get();

        $categories  =  $this->getAllCategory();

        return view('category', compact('posts', 'categories'));
    }


    public function addCategory(Request $req)
    {

        $this->validate(
            $req,
            [
                'name' => 'required',

            ],
            [
                'required' => "Ingresar :attribute",
            ]
        );

        $category = new Category;

        $category->name = $req['name'];
        $category->slug = Str::slug($req['name']);
        $category->save();

        return redirect('/dashboard/categoria');
    }


    public function getAllCategory()
    {

        $categories =  Category::all();
        return $categories;
    }
}
