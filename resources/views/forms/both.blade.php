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
                
              </div>
            </div>
        </div>
     </div>
     @foreach ($depenses as$depense)
   
        <li class="list-group-item d-flex justify-content-between align-items-start width" >
            <div class="ms-2 me-auto">
            <div class="fw-bold">{{$depense->name_d}}</div>
            
           
            </div>
            <span class="badge bg-danger rounded-pill">{{$depense->valeur_depense_d}}</span>
        </li>
        <br>
        @endforeach
        @foreach ($revenus as $revenu)
   
        <li class="list-group-item d-flex justify-content-between align-items-start width" >
            <div class="ms-2 me-auto">
            <div class="fw-bold">{{$revenu->name_r}}</div>
            
           
            </div>
            <span class="badge bg-success rounded-pill">{{$revenu->valeur_revenu}}</span>
        </li>
        <br>
        @endforeach
        
    
   </div>
    <div class="add-icone">
        <a class="add-compte text-decoration-none"  href="{{route('revenu.index', $compte->id)}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
        </a><br>
        <a class="depense text-decoration-none"  href="{{route('depense.index', $compte->id)}}">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
              </svg>
            </a><br>
            <a class="transaction text-decoration-none"  href="{{route('transaction.showtransaction',$compte->id)}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
              </svg>
      </div>
</div>
@endsection