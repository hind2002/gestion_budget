@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">NOUVEAU DEPENSE</h2>

    <form action="{{route('depense.store', $compte->id)}}" method="post">
        @csrf
        <div class="">

          <div style=" width: 50vw; margin-left : 20vw;">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card shadow-sm text-center p-3" >
                 
                  <div class="form-group-depense col-md-12">
                    <label for="inputEmail4">Valeur</label>
                    <input type="name" name="valeur_depense" class="form-control " id="inputEmail4" placeholder="valeur" >
                  </div>                   
                  <div class="form-group-depense col-md-12 ">
                    <label for="cb1-input">Categorie</label>
                    <div class="">
                      <select class="form-select form-select col-md-12" aria-label=".form-select-lg example" name="name_d">
                        @foreach ($CategorieDepense as $Categorie)
                          <option value="{{$Categorie->name}}">{{$Categorie->name}}</option>
                        @endforeach
                      </select>
                    </div>
                          
                    {{-- <label for="inputAddress2">Categorie</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Choisir Categorie</option>
                        @foreach ($sources as $source)
                
                        <option value="{{$source->id}}">{{$source->name}}</option>
                        @endforeach
                    </select> --}}
                  </div>
                  
                  
                  <div class="form-group-depense col-md-12 ">
                    <label for="inputAddress2">Date</label>
                    <input type="date" name="date_d" class="form-control " id="inputAddress2" placeholder="mantant en DH">
                  </div>

                  
                  <br>
                  <div class=" form-group">
                    <button type="submit" class="delete">Enregistrer</button>
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