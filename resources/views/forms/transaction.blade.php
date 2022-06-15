@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">TRANSFERER ENTRE LES COMPTES</h2>

   <form action="{{route('transaction.translate')}}" method="post">
        @csrf
        <div class="">
          <div style=" width: 50vw; margin-left : 20vw;">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card shadow-sm text-center p-3" >
                  <div class="form-group-modifier col-md-12">
                    <label for="inputEmail4">Transferer </label>
                    <input type="name" name="montant" class="form-control " id="inputEmail4" placeholder="en DH" >
                  </div>                    
                  <div class="form-group-modifier col-md-12 ">
                    <label for="cb1-input">De</label>
                    <div class="">
                      <select class="form-select form-select col-md-12" aria-label=".form-select-lg example" name='compte_emetteur'>
                        @foreach ($comptes as $compte)
                          <option value="{{$compte->id}}">{{$compte->nom}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group-modifier col-md-12 ">
                        <label for="cb1-input">A</label>
                        <div class="">
                          <select class="form-select form-select col-md-12" aria-label=".form-select-lg example" name='compte_recepteur'>
                            @foreach ($comptes as $compte)
                              <option value="{{$compte->id}}">{{$compte->nom}}</option>
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