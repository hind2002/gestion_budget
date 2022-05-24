      @extends('layouts.app')
      @section('content')
      <div class="container">
      <h2 class="text-center">Modifier Compte</h2>

          <form action="{{route('compte.modifiercompte', $compte->id)}}" method="post">
            @csrf
              <div class="">
                <div style=" width: 50vw; margin-left : 20vw;">
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                      <div class="card shadow-sm text-center p-3" >
                        <div class="form-group-modifier col-md-12">
                          <label for="inputEmail4">Nom du Compte</label>
                          <input type="name" name="nom" value="{{$compte->nom}}" class="form-control " id="inputEmail4" placeholder="nom" >
                        </div>                    
                        <div class="form-group-modifier col-md-12 ">
                          <label for="inputAddress2">Montant initial</label>
                          <input type="number" step="0.01" name="montant_initial" class="form-control " id="inputAddress2" placeholder="mantant en DH">
                        </div>

                        <div class="form-group-modifier col-md-12 ">
                            <label for="inputAddress">Description</label>
                            <textarea name="description" type="text" class="form-control" id="inputAddress" placeholder="Note">
                              {{$compte->description}}
                            </textarea>
                        </div>
                        <br>
                        <div class=" form-group">
                          <button type="submit" class="add">Sauvegarder</button>
                          <a type="button" href="{{route('compte.show')}}" class="delete text-decoration-none">Annuler</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>

      </div>
      @endsection