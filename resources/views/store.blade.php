@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="jumbotron">
            <h1 class="display-4">Welcome To QB-Shopping</h1>
            <hr class="my-4">
            <h3>To get the latest offers and products...</h3>
            <p class="lead">
            <a class="btn btn-primary btn-lg mt-2" href="{{route('product.index')}}" role="button">Go Shopping</a>
            </p>
        </div>
    </div>
    <div class="section">
        <div class="row">
            @foreach ($latestproducts as $product)
            <div class="col-md-4 mb-2">
                <div class="card" >
                    <img class="card-img-top" src="{{$product -> image}}" style="height: 380px">
                    <div class="card-body">
                        <h5 class="card-title">{{$product -> title}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p>${{$product -> price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
