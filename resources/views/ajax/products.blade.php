
<div class="row row-cols-2 row-cols-md-2 g-4">
@foreach($products as $prod)
    <div class="col">
        <div class="card card-product h-100" style="width: 10rem;">
            <img class="card-img-top" src="{{asset('storage/'.$prod->picture)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$prod->name}}</h5>
                <p class="card-text card-product-text">Описание:<br> {!!$prod->body!!}</p><br>
                <p class="card-price">Price: {!!$prod->price!!}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endforeach
</div>
