<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{





    public function addAd(Request $req)
    {
        $this->validate(
            $req,
            [
                'name' => 'required | max:250',
                'url' => 'required | max:250',
                'type' => 'required | max:20',
                'position' => 'required | numeric',
                'image' => 'required | mimes:jpeg,jpg,png,gif',

            ],
            [
                'required' => "Ingresar :attribute",
            ]
        );

        $Ad = new Ad();

        $Ad->name = $req["name"];
        $Ad->type = $req["type"];
        $Ad->url = $req["url"];
        $Ad->position = $req["position"];


        $path = $req->file("image")->store('public');

        $nombreArchivo = basename($path);

        $Ad->image = $nombreArchivo;

        $Ad->save();

        return redirect('dashboard/anuncios');
    }



    public function editAd($id)
    {

        $ad = Ad::find($id);

        return view('adm-edit-ad', compact('ad'));
    }



    public function updateAd(Request $req)
    {

        $this->validate(
            $req,
            [
                'name' => 'required | max:250',
                'url' => 'required | max:250',
                'type' => 'required | max:20',
                'position' => 'required | numeric ',
                'image' => ' mimes:jpeg,jpg,png,gif',

            ],
            [
                'required' => "Ingresar :attribute",
            ]
        );

        $Ad = Ad::find($req['id']);
        $Ad->name = $req["name"];
        $Ad->type = $req["type"];
        $Ad->url = $req["url"];
        $Ad->position = $req["position"];

        //Agregar tendencia 

        if ($req->file("image") != '') {

            $path = $req->file("image")->store('public');

            $nombreArchivo = basename($path);

            $Ad->image = $nombreArchivo;
        }

        $Ad->save();

        return redirect('dashboard/anuncios');
    }



    public function deleteAd(Request $req)
    {

        $id = $req['id'];

        $ad = Ad::find($id);

        $ad->delete();

        return "Anuncio borrado con exito";
    }


    public function getAllAds()
    {

        $ads = Ad::orderBy('position')->get();

        return $ads;
    }


    public function getNormalAds()
    {
        $ads = Ad::where('type', '=', 'normal')
            ->orderBy('position', 'ASC')
            ->get();

        return $ads;
    }
    public function getHorizontalAds()
    {
        $ads = Ad::where('type', '=', 'horizontal')
            ->orderBy('position', 'ASC')
            ->get();

        return $ads;
    }
}
