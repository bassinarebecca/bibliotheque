<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use App\Livre;

use Illuminate\Http\Request;

class AjoutController extends Controller
{
    public function ajout()
    {
        return view('ajout');
    }

    public function postAjout(Request $request)
    {

        $data =request()->validate([
        'titre' => 'required',
        'auteur' => 'required',
        'type_livre' => 'required',
        'pays' => 'required',
        'annee_parution' => 'required',


        ]);


        $check = Livre::create($data);

        return FacadesRedirect::to("dashboard")->withSuccess('Enregistrer ');
    }

 public function show()

    {
      return redirect("dashboard");
    }

    public function recherche()
    {
        return view('recherche');
    }
    public function rechercheresult(Request $request)
    {
        $search=null;
        $count=null;
           switch ($request->filtre) {
               case 'type':
                   $search=Livre::where("type_livre","=",$request->type)->get();
                   $count=count($search);
                   break;
                case 'pays':
                    $search=Livre::where("pays","=",$request->pays)->get();
                    $count=count($search);
                   break;
                case 'auteur':
                    $search=Livre::where("auteur","=",$request->auteur)->get();
                    $count=count($search);
                    break;
                case 'parrution':
                    $search=Livre::where("annee_parution","=",$request->parrution)->get();
                    $count=count($search);
                    break;
           }
        return view('result' ,compact("search","count"));
    }

}
