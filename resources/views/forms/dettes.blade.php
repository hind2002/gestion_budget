@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Dettes
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Valeur de dette</th>
                            <th scope="col">A Qui</th>
                            <th scope="col">Date de dette</th>
                            <th scope="col">Date de paiement</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @if(auth()->user()->dettes)
                            @foreach($dettes as $dette)
                            <th scope="row">{{$dette->valeur_dette}}</th>
                            <th scope="row">{{$dette->a_qui}}</th>
                            <td>{{$dette->created_at->format('d-m-Y')}}</td>
                            <td>{{$dette->date_dette}}</td>
                            
                          
                          </tr>
                           @endforeach
                            @endif
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
     
    
   
        
        
        
    
   </div>
    <div class="add-icone">
        <a class="depense text-decoration-none"  href="{{route('dette.index')}}">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
              </svg>
            </a><br>
            
      </div>
</div>
@endsection