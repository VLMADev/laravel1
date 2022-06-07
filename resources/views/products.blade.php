@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/products-cart.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('js/ajax_setup.js')}}"></script>
    <script src="{{asset('js/price.js')}}"></script>
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Продукты</div>
                    <aside class="card">
                        <a class="btn btn-dark text-warning" href="{{asset('product/vip')}}">VIP PRODUCTS</a>
                    </aside>
                    <div class="card-product-all">
                        @foreach($catalog as $item)
                            <h2>{{$item->name}}</h2>

                            <div class="card-product-body">
                                @foreach($item->products as $prod)
                                    @include('includes.product')
                                @endforeach
                            </div>
                        @endforeach
                        <div>
                            <h2 class="card-product-title">Без категории</h2>

                            <div class="card-product-body">
                                @foreach($product_none_category as $prod)
                                    @include('includes.product'){{-- папка includes файл product.blade.php --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
