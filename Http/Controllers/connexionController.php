<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class connexionController extends Controller
{
    function connecter(){
        
        return view('connexion')->with('erreurs',null);
    } 
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
        $gestionnaire = PdoGsb::getInfosGestionnaire($login,$mdp);
        if(is_array($visiteur)){
               session(['visiteur' => $visiteur]);
            return view('sommairevisiteur')->with('visiteur',session('visiteur'));
        }
        elseif(is_array($gestionnaire)){
             session(['visiteur' => $gestionnaire]);
            return view('sommairegestionnaire')->with('visiteur',session('visiteur'));
        }
        else{
          $erreurs[] = "Login ou mot de passe incorrect(s)";
            return view('connexion')->with('erreurs',$erreurs);
        }
    } 
    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');
       
           
    }
       
}
