@extends('layouts.management')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4 p-0 m-0">
            <div class="shadow-lg p-2">
            <div class="row">
                <div class="col-4">
                    <img width="100%" src="{{asset('img/accountlogo.png')}}" alt="">
                </div>
                <div class="col my-auto">
                    <h2>{{$user->username}}</h2></div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <h5>Voornaam:</h5>
                    <h5>Achternaam:</h5>
                    <h5>E-mail:</h5>
                    <h5>Geboortedatum:</h5>
                    <h5>Ingelogd:</h5>
                </div>
                <div class="col ml-3">
                    <h5>{{$user->firstname}}</h5>
                    <h5>{{$user->lastname}}</h5>
                    <h5>{{$user->email}}</h5>
                    <h5>{{$user->dateofbirth}}</h5>
                    @if ($user->active == true)
                        <h5>Ja</h5>
                    @endif
                    @if ($user->active == false)
                    <h5>Nee</h5>
                @endif
                    




                </div>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-2"><h5>Tokens</h5></div>
                <div class="col-3"><h5>Bron</h5></div>
                <div class="col-2"><h5>Tokens voor</h5></div>
                <div class="col-2"><h5>Tokens na</h5></div>
                <div class="col-3"><h5>Tijd</h5></div>

            </div>
            @foreach ($transactions as $trans)
    @if ($trans->userid == $user->id)
        <div class="row m-2 shadow">
            <div class="col-2"><h5>{{$trans->tokens}}</h5></div>
            <div class="col-3"><h5>{{$trans->sender}}</h5></div>
            <div class="col-2"><h5>{{$trans->tokensBefore}}</h5></div>
            <div class="col-2"><h5>{{$trans->tokensAfter}}</h5></div>
            <div class="col-3"><h5>{{$trans->timestamp}}</h5></div>
        </div>
    @endif
        
    @endforeach
        </div>
    </div>

</div>
@endsection