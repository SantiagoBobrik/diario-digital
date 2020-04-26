<?php

namespace App\Http\Controllers;

use App\Post;
use App\Ad;
use App\Category;

class DashboardController extends Controller
{



    public function getAllAds()
    {
        $ads  =  Ad::orderBy('type', 'DESC')
            ->orderBy('position', 'ASC')->get();

        return view('adm-ad', compact('ads'));
    }

    public function getAllPost()
    {

        $posts = Post::paginate(20);

        //Post tendencia ordeandos de 1 a 3
        $postTrend =  Post::where('trend', '>', 0)->orderBy('trend')->get();


        return view('adm-post', compact('posts', 'postTrend'));
    }


    public function getAllCategories()
    {

        $categories = Category::all();



        return view('adm-category', compact('categories'));
    }
}
