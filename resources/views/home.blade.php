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
  <footer>
    <div class="container footer_cnt">
      <div class="footer-left">
          <div class="logo">
             <img src="{{asset('images/marchio-sito-test.png')}}" alt="Logo La Molsana">
          </div>
          <ul>
            <li>Regione sociale: La Molisana S.P.A</li>
            <li>Sede Legale: Contrada Colle delle Api, 100/A 86100 - Campobasso (CB)</li>
            <li>PEC: la Molisana</li>
            <li>Tel: +39 0874 4981</li>
            <li>Fax: +39 0874 629584</li>
            <li>info@lamolisana.it</li>
            <li>commerciale@lamolisana.it</li>
            <li>export@lamolisana.it</li>
            <li>info@lamolisana.it</li>
            <li>export@lamolisana.it</li>
            <li>numero verde 800818081</li>
            <li>telefono 3801292455</li>
          </ul>
      </div>
      <div class="footer-right">
        <div class="list__item">
          <h3>Pastificio</h3>
          <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
          </ul>
        </div>
                <div class="list__item">
          <h3>Pastificio</h3>
          <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
          </ul>
        </div>
                <div class="list__item">
          <h3>Pastificio</h3>
          <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>