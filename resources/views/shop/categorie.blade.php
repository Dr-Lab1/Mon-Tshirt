@extends('shop')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">

        @if (isset( $category))
            
            @if($category -> parent_id !== null)
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('categorie', ['id' => $category->parent->id]) }}"> {{ $category->parent->nom }} </a> </li>
            @endif

            <li class="breadcrumb-item active" aria-current="page">{{ $category -> nom }}</li>

            @foreach($category->children as $child)
                <li class="breadcrumb-item"><a href="{{ route('categorie', ['id' => $child -> id]) }}"> {{ $child -> nom }} </a></li>
            @endforeach
        
        @else
            <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('tag', ['id' => $tag->id]) }}"> {{ $tag->nom }} </a> </li>
        @endif
    </ol>
</nav>

<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">

                @foreach($produits as $produit)

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ asset('produits/'.$produit->photo_principale) }}" class="card-img-top img-fluid" alt="{{ $produit -> nom }}">
                            <div class="card-body">
                                <p class="card-text"> {{ $produit->nom }} <br> {{ $produit->description }} </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price"> {{ number_format( $produit->prix_ht, 2) }} </span>
                                    <a href="{{ Route('voir_produit', ['id' => $produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
                    



            </div>

        </div>
    </div>

</main>

@endsection