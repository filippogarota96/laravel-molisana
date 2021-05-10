@extends('layouts.main')

@section('pageTitle')
    Home page La Molisana
@endsection

@section('content')
    
    {{-- sezione pasta lunga --}}
    <section>
      <h2>Le lunghe</h2>
      <div class="cnt__cards">
        @foreach ($lunga as $pasta)
          <div class="card">
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>  
        @endforeach
      </div>
    </section>
    {{-- sezione per la pasta corta --}}
    <section>
      <section>
      <h2>Le corte</h2>
      <div class="cnt__cards">
       @foreach ($corte as $pasta)
           <div class="card">
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>  
       @endforeach
    </section>
    <section>
       <h2>Le cortissime</h2>
      <div class="cnt__cards">
       @foreach ($cortissima as $pasta)
           <div class="card">
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>  
       @endforeach
    </section>
@endsection
 