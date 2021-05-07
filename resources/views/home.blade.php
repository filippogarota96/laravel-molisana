<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>La Molisana</title>
</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="Logo La Molsana">
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">Prodotti</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="container">
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
    </div>
  </main>
  <footer></footer>
</body>
</html>