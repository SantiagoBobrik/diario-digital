<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Ad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     * 
     * 
     */


    public function home()

    {
        $categoriesController = new CategoryController;
        $adController =  new AdController;
        $postController = new PostController;


        $posts = $postController->getAllPosts();
        $recents = $postController->recentPost();


        $ads =  $adController->getAllAds();
        $normalAds = $adController->getNormalAds();
        $horizontalAds = $adController->getHorizontalAds();


        $categories = $categoriesController->getAllCategory();


        return view('index', compact('posts', 'ads', 'recents', 'normalAds', 'horizontalAds', 'categories'));
    }
}
