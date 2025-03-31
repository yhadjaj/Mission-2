<?php

namespace App\Http\Controllers;
use setasign\Fpdf\Fpdf;


use App\Facades\PdoGsb as FacadesPdoGsb;
use App\MyApp\PdoGsb as MyAppPdoGsb;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;

class visiteurController extends Controller{


    function AfficherVisiteur(Request $request){
        if(session('visiteur') != null){
            $visiteur = session('visiteur');
            $lesVisiteurs = PdoGsb::getLesVisiteurs();

            return view('listevisiteur')->with('lesVisiteurs',$lesVisiteurs)
                                        ->with('visiteur',$visiteur);
           

        }else
        {

        }
    }

    function infoVisiteur(Request $request){
        if(session('visiteur') != null){
            $visiteur = session('visiteur');
            $lesVisiteurs = PdoGsb::getLesVisiteurs();
            $idvisiteur=$request->input('visiteur');
            $v = PdoGsb::getLeVisiteur($idvisiteur);
            return view('infovisiteur')->with('v',$v)
            ->with('visiteur',$visiteur)
            ->with('lesVisiteurs',$lesVisiteurs);
        }else{

        }
    }

    function SupprimerVisiteur($id){
        if(session('visiteur') != null){
            PdoGsb::supprimerLeVisiteur($id);
            $visiteur = session('visiteur');
            $lesVisiteurs = PdoGsb::getLesVisiteurs();

            return view('listevisiteur')->with('lesVisiteurs',$lesVisiteurs)
                                        ->with('visiteur',$visiteur);

        }
    }


}


?>