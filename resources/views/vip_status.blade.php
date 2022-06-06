@extends('layouts.app')
@section('content')

@foreach(\App\Models\Product::vipStatus()->get() as $product)
    <div class="card card-product">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text card-product-text">Описание:<br> {!!$product->body!!}</p><br>
            <p class="card-price">Price: {!!$product->price!!}</p>
            <p class="card-price">Category: {!!optional($product->category)->name!!}</p>
{{--            optional($product->category)->name   проверяет если есть $product->category выводит name --}}
{{--            optional(optional($product)->category)->name   проверяет если есть $product объект и объект category  выводит name --}}
            <a href="{{asset('product/all')}}" class="btn btn-warning" role="button">Products</a>
            <a href="{{asset('product/category/' . $product->category_id)}}" class="btn btn-warning" role="button">Category</a>
        </div>
        <img class="card-img-top" src="{{asset('storage/'.$product->picture)}}" alt="Card image cap">
    </div>
@endforeach
@endsection
