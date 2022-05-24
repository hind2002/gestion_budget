@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
     <div class="row ">
        <div class="col  my-3">
            <div class="card ">
            <div class="card-body d-flex justify-content-center">
              <h3 class="card-title ">{{$compte->nom}}</h3>
              
            </div>
          </div>
        </div>
     </div>
        <div class="row ">
            <div class="col  my-3">
              <div class="card">
                <div class="card-body d-flex justify-content-between">
                  <h3 class="card-title">Total : </h3>
                  <p class="card-text"> DH</p>
                </div>
              </div>
            </div>
        </div>
     </div>

    <ol class="list-group list-group px-4" >
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
    </ol>
   </div>
    <div class="add-icone">
        <a class="add-compte text-decoration-none"  href="{{route('compte.Ajouter')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
        </a><br>
        <a class="depense text-decoration-none"  href="{{route('compte.Ajouter')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
              </svg>
            </a>
      </div>
</div>
@endsection