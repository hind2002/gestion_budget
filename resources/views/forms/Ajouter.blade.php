@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">Creer un nouveau Compte</h2>

    <form action="{{route('compte.ajoutercompte')}}" method="post">
        @csrf
        <div class="">
          <div style=" width: 50vw; margin-left : 20vw;">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card shadow-sm text-center p-3" >
                  <div class="form-group-modifier col-md-12">
                    <label for="inputEmail4">Nom du Compte</label>
                    <input type="name" name="nom" class="form-control " id="inputEmail4" placeholder="nom" >
                  </div>                    
                  <div class="form-group-modifier col-md-12 ">
                    <label for="inputAddress2">Budget</label>
                    <input type="text" name="budget" class="form-control " id="inputAddress2" placeholder="mantant en DH">
                  </div>

                  <div class="form-group-modifier col-md-12 ">
                      <label for="inputAddress">Description</label>
                      <textarea type="text" name="description" class="form-control" id="inputAddress" placeholder="Note">
                        
                      </textarea>
                  </div>
                  <br>
                  <div class=" form-group">
                    <button type="submit" class="add">Enregistrer</button>
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