<?php

namespace App\Http\Controllers\api;
use App\Categorie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    function index(){

        $categorie = Categorie::all();
        
        return $categorie;
    }

    function show($categorieId){
         
        $categorie = Categorie::where("id",$categorieId)->with("post")->first();


        return $categorie;

    }
}
