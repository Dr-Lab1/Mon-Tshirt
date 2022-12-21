<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">A propos</h4>
            <p class="text-white">Ajoutez quelques informations sur l'album ci-dessous, l'auteur ou tout autre contexte. Faites quelques phrases pour que les gens puissent trouver des informations. Ensuite, reliez-les à des sites de réseaux sociaux ou à des informations de contact.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="https://twitter.com/JoBahati1" class="text-white">Follow on Twitter</a></li>
              <li><a href="https://web.facebook.com/jonathan.kukwabantu.7" class="text-white">Like on Facebook</a></li>
              <li><a href="mailto:jonathankukwabantu120302@gmail.com" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
        <a href="{{ route('accueil') }}" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
            <circle cx="12" cy="13" r="4"></circle>
          </svg>
          <strong>Mon T-Shirt</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cart_index') }}"><i class="fa fa-shopping-cart"></i> Panier</a>
          </li>
        </ul>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">

        @foreach($categories as $categorie)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categorie', ['id' => $categorie->id]) }}">{{ $categorie->nom }}</a>
          </li>
        @endforeach

        </ul>
      </div>
    </nav>
  </header>