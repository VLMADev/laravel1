@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/products-cart.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$category->name}}</div>
                    <a href="{{asset('product/all')}}" class="btn btn-warning" role="button">Products</a>
                    <div class="card-product-all">

                            <div class="card-product-body">
                                @foreach($category->products as $prod)
                                    @include('includes.product')
                                @endforeach
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
