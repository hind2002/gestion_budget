@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Compte emetteur</th>
            <th scope="col">compte recepteur</th>
            <th scope="col">Montant</th>
            <th scope="col">Date de transaction</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($transactions as $transaction)
            <th scope="row">{{$transaction->compte_emetteur}}</th>
            <th scope="row">{{$transaction->compte_recepteur}}</th>
            <td>{{$transaction->montant}}</td>
            <td>{{$transaction->created_at->format('d-m-Y')}}</td>
           
          </tr>
           @endforeach
        </tbody>
      </table>
@endsection
{{-- @foreach ($transactions as $transaction)
<a>Compte emetteur<div class="fw-bold">{{$transaction->compte_emetteur}}</div></a>
            <a>Compte recepteur:<div class="fw-bold">{{$transaction->compte_recepteur}}</div></a> --}}