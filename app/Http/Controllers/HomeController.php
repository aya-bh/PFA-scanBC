<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $prod = Produit::count();
        $user = User::count();
        $cat = Categorie::count();
        return view('home.index', compact('prod','user','cat'));
    }
}