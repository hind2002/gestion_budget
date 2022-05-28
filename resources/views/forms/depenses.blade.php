@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">NOUVEAU DEPENSE</h2>

    <form action="{{route('compte.ajoutercompte')}}" method="post">
        @csrf
        <div class="">
          <div style=" width: 50vw; margin-left : 20vw;">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card shadow-sm text-center p-3" >
                  <div class="form-group-depense col-md-12">
                    <label for="inputEmail4">Valeur</label>
                    <input type="name" name="valeur_revenu" class="form-control " id="inputEmail4" placeholder="valeur" >
                  </div>                    
                  <div class="form-group-depense col-md-12 ">
                    <label for="cb1-input">Categorie</label>
                    <div class="combobox combobox-list">
                    <div class="group">
                        <input id="cb1-input" class="form-control" type="text" role="combobox" aria-autocomplete="both" aria-expanded="false" aria-controls="cb1-listbox">
                        <button type="button" id="cb1-button" aria-label="States" aria-expanded="false" aria-controls="cb1-listbox" tabindex="-1">
                        <svg width="50" height="30" aria-hidden="true" focusable="false">
                            <polygon class="arrow" stroke-width="0" fill-opacity="0.75" fill="currentcolor" points="3,6 15,6 9,14"></polygon>
                        </svg>
                        </button>
                    </div>
                    <ul id="cb1-listbox" role="listbox" aria-label="States">
                        @foreach ($CategorieDepense as $categorie)
                        <li id="lb1-al" role="option">{{$categorie->name}}</li>
                        @endforeach
                    </ul>
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
                    <input type="date" name="date" class="form-control " id="inputAddress2" placeholder="mantant en DH">
                  </div>

                  <div class="form-group-depense col-md-12 ">
                      <label for="inputAddress">Description</label>
                      <textarea type="text" name="description" class="form-control" id="inputAddress" placeholder="Note">
                        
                      </textarea>
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