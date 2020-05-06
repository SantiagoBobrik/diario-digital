<?php

namespace App\Http\Controllers;

use App\Post;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{




    public function getPostbyCategory()
    {
        $categoriesController = new CategoryController;


        $categories = $categoriesController->getAllCategory();

        $postArray = [];
        foreach ($categories as $category) {
            $posts = Post::where('category_id', '=', $category->id)
                ->orderBy('created_at', 'DESC')
                ->limit(4)->get();


            foreach ($posts as $post) {
                array_push($postArray, $post);
            }
        }

        return $postArray;
    }

    public function getAllPosts()
    {

        $posts = Post::orderBy('created_at', 'DESC')
            ->get();


        return $posts;
    }


    public function postDetail($id)
    {
        $adController = new AdController;
        $categoryController =  new CategoryController;

        $normalAds =  $adController->getNormalAds();
        $horizontalAds =  $adController->getHorizontalAds();

        $post = Post::find($id);
        $ads = Ad::all();

        $categories = $categoryController->getAllCategory();

        return view("post-detail", compact('post', 'normalAds', 'horizontalAds', 'categories'));
    }

    public function addPost(Request $req)
    {
        $this->validate(
            $req,
            [
                'tittle' => 'required',
                'content' => 'required',
                'trend' => 'required',
                'image' => 'required',
            ],
            [
                'required' => "Ingresar :attribute",
            ]
        );


        //Agregar tendencia 
        if ($req['trend'] != 0) {

            $postTrend = Post::where('trend', $req['trend'])->first();

            if ($postTrend != '') {

                $postTrend->trend = 0;

                $postTrend->save();
            }
        }
        $post = new Post();

        $post->user_id = $req["user_id"];
        $post->tittle = $req["tittle"];
        $post->description = $req["description"];
        $post->content = $req["content"];
        $post->category_id = $req["cateroy_id"];
        $post->trend = $req["trend"];

        $path = $req->file("image")->store('public');

        $nombreArchivo = basename($path);

        $post->image = $nombreArchivo;

        $post->save();

        return redirect('dashboard/noticias');
    }

    public function deletePost(Request $req)
    {

        $id = $req['id'];

        $post = Post::find($id);

        $post->delete();

        return "Noticia Borrada con exito";
    }

    public function editPost($id)
    {
        $categoriesController = new CategoryController;
        $categories = $categoriesController->getAllCategory();

        $post = Post::find($id);

        return view('adm-edit-post', compact('post', 'categories'));
    }

    public function updatePost(Request $req)
    {

        if ($req['trend'] != 0) {

            $postTrend = Post::where('trend', $req['trend'])->first();

            if ($postTrend != '') {

                $postTrend->trend = 0;

                $postTrend->save();
            }
        }
        $post = Post::find($req['post_id']);
        $post->user_id = $req["user_id"];
        $post->tittle = $req["tittle"];
        $post->description = $req["description"];
        $post->content = $req["content"];
        $post->category_id = $req["cateroy_id"];
        $post->trend = $req["trend"];

        //Agregar tendencia 

        if ($req->file("image") != '') {

            $path = $req->file("image")->store('public');

            $nombreArchivo = basename($path);

            $post->image = $nombreArchivo;
        } else {
            $post->image = $req["image_name"];
        }

        $post->save();

        return redirect('dashboard/noticias');
    }



    public function search(Request $req)
    {
        $inputSearch = $req['search'];
        $categoriesController = new CategoryController;
        $categories = $categoriesController->getAllCategory();

        $search =  Post::where('tittle', 'like', '%' . $inputSearch . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);


        return view('search', compact('search', 'categories'));
    }


    public function recentPost()
    {

        $recents = Post::orderBy('created_at', 'DESC')
            ->limit(4)
            ->get();

        return $recents;
    }


    public function trendPosts()
    {

        $postsTrend = Post::where('trend', '>', 0)
            ->orderBy('trend', 'ASC')
            ->get();

        return $postsTrend;
    }

    public function viewAddPost()
    {
        $categoriesController = new CategoryController;


        $categories = $categoriesController->getAllCategory();


        return view('adm-add-post', compact('categories'));
    }
}
