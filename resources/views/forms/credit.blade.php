@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">NOUVEAU CREDIT</h2>

    <form action="{{route('credit.store')}}" method="post">
        @csrf
        <div class="">

          <div style=" width: 50vw; margin-left : 20vw;">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card shadow-sm text-center p-3" >
                 
                  <div class="form-group-modifier col-md-12">
                    <label for="inputEmail4">Valeur $</label>
                    <input type="name" name="valeur_credit" class="form-control " id="inputEmail4" placeholder="valeur" >
                  </div>   
                  <div class="form-group-modifier col-md-12">
                    <label for="inputEmail4"> De qui</label>
                    <input type="name" name="de_qui" class="form-control " id="inputEmail4" placeholder="" >
                  </div>                  
                  
                   
                  
                  
                  <div class="form-group-modifier col-md-12 ">
                    <label for="inputAddress2">Date de paiement</label>
                    <input type="date" name="date_credit" class="form-control " id="inputAddress2" placeholder="mantant en DH">
                  </div>

                  
                  <br>
                  <div class=" form-group">
                    <button type="submit" class="delete">Ajouter</button>
                    <button type="submit" class="delete">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>

</div>
@endsection