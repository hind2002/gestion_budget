<?php

namespace App\Http\Controllers;

use App\Models\dette;
use Illuminate\Http\Request;
use App\Http\Controllers\DetteController;

class DetteController extends Controller
{
    //
    public function index()
    {
        return view('forms.dette');
    }
    public function store(Request $request)
    {
      
        dette::create([
            "user_id" => auth()->user()->id,
            "valeur_dette"=>$request->valeur_dette,
            "a_qui"=>$request->a_qui,
            "date_dette"=>$request->date_dette,

        ]);

        return redirect()->route('dettes.afficher')->with([
            'dettes' => dette::get(),
             
        ]);
             
        
        
            
            
            
        
        
    }
    // public function afficher(dettes $dette)
    //         {
    //             $dettes = auth()->user()->dettes;
    //             return view('forms.dettes')->with([
                   
    //                'dette'=>$dette,
    //                'dettes' => dette::get()
                    
                    
    //             ]);
    //         }
}
