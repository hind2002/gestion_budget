<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\TransactionController;

class TransactionController extends Controller
{
      public function showtransaction(compte $compte)
    {    $comptes = auth()->user()->comptes;
        return view('forms.transaction')->with([
            'comptes' => $comptes,
        
        ]);
    }
    public function translate(Request $request){
        $compte_emetteur = compte::find($request->compte_emetteur);

        if($compte_emetteur->budget >= $request->montant){

        
        transaction::create([

        'compte_id'=>$request->compte_emetteur,
        'sens'=>"db",
        'montant'=>$request->montant,
        ]);
        transaction::create([
        'compte_id'=>$request->compte_recepteur,
        'sens'=> "cr",
        'montant'=>$request->montant,
        ]);
        $compte_emetteur->update([
            'budget'=>$compte_emetteur->budget - $request->montant
        ]);
        $compte_recepteur = compte::find($request->compte_recepteur);
        $compte_recepteur->update([
            'budget'=>$compte_recepteur->budget + $request->montant
        ]);
        return redirect()->route('compte.show')->with([
            'success'=>'transaction avec succes'
        ]);
       

        }else
        {
        return redirect()->back()->withErrors(['montant insuffisant']);
        }
            }
}
