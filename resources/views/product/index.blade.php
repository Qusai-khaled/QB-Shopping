@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">{{session()->get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
        </div>
    @endif

    <div class="section">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-2">
                <div class="card" >
                    <img class="card-img-top" src="{{$product -> image}}" style="height: 380px">
                    <div class="card-body">
                        <h5 class="card-title">{{$product -> title}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p>${{$product -> price}}</p>
                        <a href="{{ route('cart.add',$product)}}" class="btn btn-primary">Bye</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
