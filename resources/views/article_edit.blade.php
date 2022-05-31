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
                    <div class="card-header">{{ __('Форма редактирования') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{asset('home/'.$arcticle->id.'/edit')}}" enctype="multipart/form-data">
                            @csrf {{-- защита формы от спама --}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" name="name" value="{{$arcticle->name}}" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <input class="form-control" name="body" value="{{$arcticle->body}}" id="exampleFormControlTextarea1">
                            </div>
                            <article class="form-product-add">
                                <img src="{{asset('storage/'.$arcticle->picture)}}" alt="image" height="150px" width="150px">
                                <input type="file" name="picture1" class="custom-file-input " id="customFileLang" lang="es">
                                <aside>
                                    <a class="card-link btn btn-outline-danger btn-delete-margin" role="button" href="{{asset('home/'.$arcticle->id.'/delete_image')}}">Удалить картинку</a>
                                </aside>
                            </article>
                            <article class="right">
                                <input type="submit" name="save" class="custom-file-input btn btn-success" id="customFileLang" lang="es" value="Обновить">
                                <a href="{{asset("home/")}}" class=" btn btn-outline-success" role="button">Назад</a>
                            </article>
                        </form>
                        {{--                    {{ __('You are logged in!') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
