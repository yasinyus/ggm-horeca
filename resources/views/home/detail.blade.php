@extends('layouts.home', ['title' => 'Home'])

@section('content')


<div class="container" style="height:900px">
        <div class="row">
            <div class="">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:10px !important;">
                   
                    <div style="justify-content: center; margin:auto; width:90%">
                        
                        <div class="row">
                            <div class="col-6">
                                 <a href="/home" >
                                    <img src="{{ App\Models\Setting::find(1)->brand }}" width="80%">
                                </a>
                            </div>
                            <div class="col-6">
                                <img src="{{ App\Models\Setting::find(1)->program }}" width="100%"><br>
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-bars" style="color:white; float: right; font-size:25px"></i>
                                </a>
                            </div>
                        </div>


                        <h5 class="mt-5" style="color: #fff;">Redeem Merchandise</h5>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-11" style="padding:10px; margin:15px;  background: white; border-radius:20px;">
                                    <img src="{{ $merch->photo }}" width="100%">   
                            </div>
                            <div class="col-11">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 13px; color:#fff">{{ $merch->name }}</b></div>
                                    <div class="col-6"><b style="font-size: 13px; color:#fff; float:right">{{ $merch->value }} Stempel</b></div>
                                </div>    
                            </div>
                            <div class="col-11 mt-3">
                                <p style="color: #fff">Hanya dengan {{ $merch->value }} Stempel, anda dapat menukarkan dengan {{ $merch->name }} edisi khusus dari Gaung Merah</p>
                            </div>
                            <div class="col-11 mt-3">
                            @if ($merch->value <= auth()->user()->stample)
                                <a href="" data-toggle="modal" data-target="#tukar" class="btn btn-lg btn-block btn-rounded">Tukar Hadiah</a>
                            @else
                                <a href="{{ route('stample') }}" class="btn btn-lg btn-block btn-rounded">Belum Cukup</a>
                            @endif
                            </div>
                               
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
    <div class="modal fade" id="exampleModal" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: black; opacity:90%; height:800px">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <a href="{{ route('home') }}" style="float:right; color:aliceblue; font-size: 20px;">Home</a> <br><br>
                <a href="{{ route('profile') }}" style="float:right; color:aliceblue; font-size: 20px;">Profile</a> <br><br>
                <a href="{{ route('stample') }}" style="float:right; color:aliceblue; font-size: 20px;">Stempel</a> <br><br>
                <a href="" data-toggle="modal" data-target="#klaim" style="float:right; color:aliceblue; font-size: 20px;">Klaim Stempel</a> <br><br>
                <a href="{{ route('keluar') }}" style="float:right; color:aliceblue; font-size: 20px;">Log Out</a><br><br>
                <a href="" style="float:right; color:aliceblue; font-size: 20px;" data-dismiss="modal" aria-label="Close">x</a>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" style="color:#fff" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
        </div>
        </div>
    </div>
    <style>
        .modal-content{
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            -o-box-shadow: none !important;
            box-shadow: none !important;
        }
        
         .modal-backdrop {
             opacity:0.8 !important;
        }
    </style>
    <div class="modal fade-down" id="tukar" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document" >
        <div class="modal-content" style="background-color: rgba(0,0,0,.0001) !important;">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" style="background-color: rgba(0,0,0,.0001) !important;">
                <img src="{{ asset('assets/img/tukar_merch.png') }}" width="100%" >
            </div>
            <div class="modal-footer" style="background-color: rgba(0,0,0,.0001) !important;">
                <a href="{{ route('redeem') }}?merch={{ $merch->id }}" style="color:white">Lanjutkan ></a>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade-down" id="klaim" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-fullscreen" role="document" >
        <div class="modal-content" style="background-color: rgba(0,0,0,.0001) !important;">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" style="background-color: rgba(0,0,0,.0001) !important;t">
                <img src="{{ asset('assets/img/klaim_stempel.png') }}" width="100%" style="border-radius:20px;">
            </div>
            <div class="modal-footer" style="background-color: rgba(0,0,0,.0001) !important;">
                <a href="/klaim" style="color:white">Lanjutkan ></a>
            </div>
        </div>
        </div>
    </div>





@endsection