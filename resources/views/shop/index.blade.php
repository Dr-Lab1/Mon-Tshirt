@extends('home')
@section('content')
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      @foreach($produits as $produit)

      <div class="col">
        <div class="card shadow-sm">
          <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

          <img src="{{ asset('produits/'.$produit->photo_principale) }}" alt="image card">

          <div class="card-body">
            <p class="card-text">{{$produit -> nom}} <br> {{$produit -> description}} <br>

              <span class="badge badge-info"><a href="{{ route('categorie', ['id' => $produit -> category -> id]) }}">{{ $produit -> category -> nom }}</a></span>

            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                <span class="price">{{ $produit->prixTTC() }} €</span>
                <a href="{{ route('voir_produit', ['id' => $produit -> id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</div>
@endsection