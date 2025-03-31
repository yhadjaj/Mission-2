<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class testController extends Controller
{
    function testAffichage(Request $request){
        if( session('visiteur') != null){
            $visiteur = session('visiteur');
            return view('testAfficher')->with('visiteur',$visiteur);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

}
