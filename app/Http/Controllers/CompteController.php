<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\revenu;
use App\Models\depense;
use Illuminate\Http\Request;
use App\Models\categorie_depense;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    //
    
      public function show()
    {
        //dd(compte::latest());
        $comptes = auth()->user()->comptes;
        return view('forms.voirplus')->with([
            'comptes' => $comptes,
            'total' => $comptes->sum('budget')
            
        ]);
    } 
    
    public function showmodifier(compte $compte)
    {
        return view('forms.modifiercompte')->with([
            'compte' => $compte
        ]);
    }
    public function ajouter()
    {
        return view('forms.Ajouter');
    }
    public function ajoutercompte(Request $request)
    {
       $this->validate($request,[
           "nom" => "required|min:3",
           "budget" => "nullable|numeric",
            "description"=>"required"

       ]);
       $title=$request->title;
       compte::create([
        "nom" =>$request->nom ,
        "user_id" => auth()->user()->id,
        "budget" => $request->budget,
         "description"=>$request->description
       ]);
       return redirect()->route('compte.show')->with([
           'success'=>'Ajout avec succes'
       ]);

    }
    public function modifierCompte(Request $request,compte $compte)
    {
        $this->validate($request,[
            "nom" => "required|min:3",
            "montant_initial" => "required|numeric",
        ]);
        $title=$request->title;
        $compte->update([
         "nom" =>$request->nom ,
         "montant_initial" => $request->montant_initial,
         "budget" => $compte->budget + $request->montant_initial,
          "description"=>$request->description
        ]);
        return redirect()->route('compte.show')->with([
            'success'=>'modifier avec succes'
        ]);
    }
    public function destroy(compte $compte){
        $compte->delete();
        return redirect()->route('compte.show')->with([
            'success'=>'supprimer avec succes'
        ]);
    }
    public function both(compte $compte)
    {
        
        return view('forms.both')->with([
           'compte'=>$compte,
            'depenses' => $compte->depenses,
            'revenus' => $compte->revenus,
            
        ]);
    }

    
}
