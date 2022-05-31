@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/form-product-add.css') }}" rel="stylesheet">
    <link href="{{ asset('css/articles.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Личный кабинет') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-home">
                            <form method="post" action="{{asset('home')}}" enctype="multipart/form-data">
                                @csrf {{-- защита формы от спама --}}

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                           placeholder="Test">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                </div>
                                <div class="form-product-add">
                                    <input type="file" name="picture1" class="custom-file-input" id="customFileLang"
                                           lang="es">
                                </div>
                                <input type="submit" name="save" class="custom-file-input btn btn-success" id="customFileLang"
                                       lang="es" value="Добавить">
                            </form>
                        </div>
                        <div class="row row-cols-2 row-cols-md-2 g-4">
                            @foreach($arcticls as $art)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{asset('storage/'.$art->picture)}}" alt="image" height="auto">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$art->name}}</h5>
                                            <p class="card-text">{{$art->body}}</p>
                                        </div>
                                        <div class="right card-footer-link">
                                            <a class="card-link btn btn-outline-success links"
                                               href="{{asset('home/'.$art->id.'/edit')}}"
                                               role="button">Редактировать</a>
                                            <a class="card-link btn btn-outline-danger links"
                                               href="{{asset('home/'.$art->id.'/delete')}}" role="button">Удалить</a>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Data created:{{$art->created_at}}</small>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        {{--                    {{ __('You are logged in!') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
