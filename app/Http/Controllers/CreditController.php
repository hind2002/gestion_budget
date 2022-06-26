<?php

namespace App\Http\Controllers;

use App\Models\dette;
use App\Models\credit;
use Illuminate\Http\Request;
use App\Http\Controllers\CreditController;

class CreditController extends Controller

{
    public function index()
    {
        return view('forms.credit');
    }
    public function store(Request $request)
    {
      
        credit::create([
            "user_id" => auth()->user()->id,
            "valeur_credit"=>$request->valeur_credit,
            "de_qui"=>$request->de_qui,
            "date_credit"=>$request->date_credit,

        ]);

        return redirect()->route('credits.afficher')->with([
            'credits' => credit::get(),
             
        ]);
            
            
            
        
        
    }
 
     }

