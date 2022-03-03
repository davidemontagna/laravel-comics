@extends('layouts.app')

@section('page-title', 'Home')
    
@section('comics')
    <div class="container-main">
        <div class="current">Current series</div>
        <div class="products">
            @foreach ($comics as $indice => $comic)
                <div class="card">
                    <div class="img-card">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    
                    <div class="name">
                        <h6>{{$comic['title']}}</h6>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="position-load">
            <div class="load">Load More</div>
        </div>
        
    </div>
@endsection