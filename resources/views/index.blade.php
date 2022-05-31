@extends('layouts.app')
@push('scripts')
    <script src="{{asset('js/index.js')}}"></script>
@endpush
@push('styles')
    <link href="{{ asset('css/form-product-add.css') }}" rel="stylesheet">
    <link href="{{asset('css/articles.css')}}" rel="stylesheet">
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Main page') }}</div>

                    <div class="card-body div">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <span class="text">SHOP</span></br>

                            <article class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach($arcticls as $art)
                                    @include('includes.article')
                                @endforeach
                            </article>
                        </div>
                    </div>
                    <article class="container row">
                        <div class="col-3 catalog">
                            @foreach($catalog as $categ)
                                <a href="#" class="btn btn-warning" style="margin: 10px" role="button" data-id="{{$categ->id}}">{{$categ->name}}</a>
                            @endforeach

                        </div>
                        <div class="col">
                            <div class="empty">

                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
@endsection
