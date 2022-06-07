
<div class="card card-product" style="width: 18rem;">
    <img class="card-img-top h-100" src="{{asset('storage/'.$prod->picture)}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title fw-bold">{{$prod->name}}</h5>
        <p class="card-text card-product-text">Описание: {!!$prod->body!!}</p>
    </div>
    <div class="card-body">
{{--        <p class="card-price">Price: {!!$prod->price!!}</p>--}}
        <a class="price-show btn btn-dark" data-id="{!!$prod->id!!}" href="#">Price:</a>
        <div class="price-empty{{$prod->id}}"></div>
    </div>
    <a href="{{asset('product/'.$prod->id)}}" class="btn btn-success">Подробнее</a>
</div>

