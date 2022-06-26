@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header justify-content-center" id="headingOne">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Credit
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Valeur de credit</th>
                            <th scope="col">De Qui</th>
                            <th scope="col">Date de credit</th>
                            <th scope="col">Date de paiement</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @if(auth()->user()->credits)
                            @foreach($credits as $credit)
                            <th scope="row">{{$credit->valeur_credit}}</th>
                            <th scope="row">{{$credit->de_qui}}</th>
                            <td>{{$credit->created_at->format('d-m-Y')}}</td>
                            <td>{{$credit->date_credit}}</td>
                            
                           
                          </tr>
                           @endforeach
                           @endif
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            
            </div>
     
    
   
        
        
        
    
   </div>
    <div class="add-icone">
        <a class="add-compte text-decoration-none"  href="{{route('credit.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
        </a><br>
       
      </div>
</div>
@endsection