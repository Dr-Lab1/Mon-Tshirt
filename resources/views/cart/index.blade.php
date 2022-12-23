@extends('shop')

@section('content')

<main role="main">
    {{-- {{ dd($content) }} --}}
    <section class="py-5">
        <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Qte</th>
                        <th>P.U</th>
                        <th>Total TTC</th>
                    </tr>
                </thead>
                <tbody>

            @foreach ($content as $produit)                        
                <tr>
                    <td>
                        <img width="110" class="rounded-circle img-thumbnail" src="{{ asset('produits/'.$produit->attributes->photo) }}" alt="{{ asset('produits/'.$produit->name) }}">
                        {{ $produit->name }}

                        <p>
                            Taille : <strong> {{ strToUpper($produit->attributes->size) }} </strong>
                        </p>
                    </td>
                    <td>

                                <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number" value="{{ $produit->quantity }}">


                                <a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
                    </td>
                    <td>
                        {{ number_format($produit->attributes->prix_ttc, 2) }} €
                    </td>
                    <td>
                        {{ number_format($produit->attributes->prix_ttc * $produit->quantity, 2) }} €
                    </td>
                </tr>
            @endforeach
            
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td>Total HT</td>
                    <td>{{ number_format($total_ht, 2) }} €</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>TVA (16%)</td>
                    <td>{{ number_format($tva, 2) }} €</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Total TTC</td>
                    <td>{{ number_format($total_ttc, 2) }} €</td>
                </tr>
                </tfoot>
            </table>
            <a class="btn btn-block btn-outline-dark" href="">Commander</a>
        </div>
    </section>

</main>

@endsection