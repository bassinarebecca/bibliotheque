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


}
