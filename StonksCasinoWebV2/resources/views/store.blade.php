@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <div class="row">
                <img class="img-card-shop" src="{{ asset('img/card/golden-card.png') }}" alt="">
            </div>
            <div class="row">
                <h3>Golden-card deck</h3>
            </div>
            <div class="row">
                <label >€5,-</label>
            </div>
            <div class="row">
                <button class="btn btn-groen">Kopen</button>
            </div>
        </div>
   

    <div class="col-12 col-lg-3 col-md-4 col-sm-6">
        <div class="row">
            <img class="img-card-shop" src="{{ asset('img/card/Amethis-card.png') }}" alt="">
        </div>
        <div class="row">
            <h3>Amethist-card deck</h3>
        </div>
        <div class="row">
            <label >€5,-</label>
        </div>
        <div class="row">
            <button class="btn btn-groen">Kopen</button>
        </div>
    </div>
</div>
</div>
@endsection