<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('img/favicon.png') }}">

  <title>Mon T-Shirt</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/album.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tshirt.css') }}" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

  @include('layouts.header')

  <main>

    <section class="py-5 text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Commandez votre <br><span class="badge badge-light">nouveau</span> <br>T-Shirt <span class="badge badge-primary ">préféré </span>!</h1>
        <p class="lead text-muted">Dénichez THE T-Shirt de votre série, films préféré(e).</p>

      </div>
    </section>

    @yield('content')

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>Mon T-Shirt</p>
    </div>
  </footer>


  <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>

</html>