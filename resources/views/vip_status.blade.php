@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">VIP продукты</div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach(\App\Models\Product::vipStatus() as $product)
                            <div class="col">
                                <div class="card card-product-all">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{$product->name}}</h5>
                                        <p class="card-text card-product-text">Описание:<br> {!!$product->body!!}</p>
                                        <br>
                                        <p class="card-price">Price: {!!$product->price!!}</p>
                                        <p class="card-price">Category: {!!optional($product->category)->name!!}</p>
                                        {{--            optional($product->category)->name   проверяет если есть $product->category выводит name --}}
                                        {{--            optional(optional($product)->category)->name   проверяет если есть $product объект и объект category  выводит name --}}
                                        <a href="{{asset('product/all')}}" class="btn btn-warning" role="button">Products</a>
                                        <a href="{{asset('product/category/' . $product->category_id)}}"
                                           class="btn btn-warning"
                                           role="button">Category {{$product->category_id}}</a>
                                    </div>
                                    <img class="card-img-bottom" src="{{asset('storage/'.$product->picture)}}"
                                         alt="Card image cap">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
