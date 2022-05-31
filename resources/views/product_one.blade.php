@extends('layouts.app')
@section('content')


    <div class="card card-product">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text card-product-text">Описание:<br> {!!$product->body!!}</p><br>
            <p class="card-price">Price: {!!$product->price!!}</p>
            <p class="card-price">Category: {!!$product->category->name!!}</p>
            <a href="{{asset('product/all')}}" class="btn btn-warning" role="button">Products</a>
            <a href="{{asset('product/category/' . $product->category_id)}}" class="btn btn-warning" role="button">Category</a>
        </div>
        <img class="card-img-top" src="{{asset('storage/'.$product->picture)}}" alt="Card image cap">
    </div>
@endsection
