@extends('layouts.app')
@push('styles')
{{--    <link href="{{ asset('css/form-product-add.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/articles1.css') }}" rel="stylesheet">--}}
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
{{--                        --}}
                        {{$categor->name}}
                        {{$categor->body}}
{{--                    {{ __('You are logged in!') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
