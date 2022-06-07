@push('styles')
    <link href="{{ asset('css/articls.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price.css') }}" rel="stylesheet">
@endpush

<div class="col">
    <div class="card h-100" >
        <img src="{{asset('storage/'.$art->picture)}}" alt="image" height="auto" >
        <div class="card-body">
            <h5 class="card-title">{{$art->name}}</h5>
            <p class="card-text">{{$art->body}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Data created:{{$art->created_at}}</small>
        </div>
    </div>
</div>

