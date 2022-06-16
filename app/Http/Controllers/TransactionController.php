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

        $this->validate($request,[
            "compte_emetteur" => "required",
            "montant" => "required|numeric",
             "compte_recepteur"=>"required"
 
        ]);
        $compte_emetteur = compte::find($request->compte_emetteur);

        if($compte_emetteur->budget >= $request->montant){

        $compte_recepteur = compte::find($request->compte_recepteur);
        
        transaction::create([
        'compte_recepteur'=>$compte_recepteur->nom,
        'compte_emetteur'=>$compte_emetteur->nom,
        'sens'=> "cr",
        'montant'=>$request->montant,
        ]);
       
        
        $compte_emetteur->update([
            'budget'=>$compte_emetteur->budget - $request->montant
        ]);

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
        public function afficher(transaction $transaction)
            {
                
                return view('forms.trans')->with([
                   
                   'transaction'=>$transaction,
                   
            'transactions' => transaction::get()
                    
                    
                ]);
            }
}
