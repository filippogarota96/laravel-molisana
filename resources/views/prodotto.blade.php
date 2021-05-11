@extends('layouts.main')

@section('prodotto')
    Prodotto
@endsection

@section('content')
    <div class="prodotto">
      <div class="container">
        <h1>{{$pasta['titolo']}}</h1>
        <img src="{{$pasta['src-h']}}" alt="{{$pasta['titolo']}}">
        <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
        <p>
          {!!$pasta['descrizione']!!}
        </p>
       <div class="prodotto-chevron left">
         <a href="{{route('prodotto', ['id' => $prevProdotto])}}">
          <i class="fas fa-chevron-left"></i> 
         </a>
       </div>
       <div class="prodotto-chevron right">
         <a href="{{route('prodotto', ['id' => $nextProdotto])}}">
          <i class="fas fa-chevron-right"></i> 
         </a>
       </div>
      </div>
    </div>
@endsection

