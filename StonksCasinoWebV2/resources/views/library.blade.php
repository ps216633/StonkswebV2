@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Roulette">
                <div class="header-btn " >
                    <h2>Roulette</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/roulette-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Roulette" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Roulette</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      ...
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Blackjack">
                <div class="header-btn" >
                    <h2>Blackjack</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/blackjack-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Blackjack" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Blackjack</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      ...
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Poker">
                <div class="header-btn" >
                    <h2>Poker</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/poker-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Poker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Poker</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      ...
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Slotmachine">
                <div class="header-btn" >
                    <h2>Slotmachine</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/slotmachine-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Slotmachine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Slotmachine</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      ...
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Paardenrace">
                <div class="header-btn" >
                    <h2>Paardenrace</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/Horserace-btnimg.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Paardenrace" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Paardenrace</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      ...
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div>
</div>
@endsection