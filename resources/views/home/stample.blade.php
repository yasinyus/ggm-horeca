@extends('layouts.home', ['title' => 'Home'])

@section('content')


<div class="container" style="height:900px">
        <div class="row">
            <div
                class="">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:10px !important;">
                    

                   
                    <div style="justify-content: center; margin:auto; width:92%">
                        
                        <div class="row">
                            <div class="col-6">
                                <a href="/home">
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

                        <div class="row">
                            <div class="col-12">
                               <div class="row">
                                    <div class="col-3" style="margin-top:10px; padding-left:15px">
                                        <img src="{{ App\Models\Setting::find(1)->stampel }}" width="100px" height="100px" style="position:inherit; z-index:1000 !important">
                                    </div>
                                    <div class="col-9 mt-4" style="background: white; height:50px; width:30px !important; margin-top:35px !important;">
                                        <p style="float: right; position: absolute;
                                        font-size: 40px;
                                        font-weight: 700;
                                        line-height: 48.41px;
                                        text-align: left;
                                        color:black;
                                        margin-left:7px;
                                        ">{{ auth()->user()->stample }}</p>
                                        <h4 style="float: right; padding-left:50px; position: absolute;
                                        font-size: 16px;
                                        font-weight: 600;
                                        line-height:50px;
                                        letter-spacing: 0.30000001192092896px;
                                        text-align: left;
                                        color:black;
                                        margin-left:5px;
                                        ">Stempel yang anda miliki</h4>
                                    </div>
                               </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-center" style="background: #FEBD97; @if (auth()->user()->stample  == 0) {height:1000px;}@endif">
                            @foreach ($transaction as $item )
                            <div class="col-5" style="padding:10px; margin:15px;  background: white; border-radius:10px;">
                                <div>
                                    <div class="row">
                                        <!--<div class="col-6"><img src="{{ asset('assets/img/logo-merah.png') }}" width="40px"></div>-->
                                        <div class="col-12"><b style="font-size: 10px">{{ date("d-m-Y", strtotime($item->tanggal_klaim)) }}</b></div>
                                    </div>
                                    <img src="{{ App\Models\Setting::find(1)->stampel }}" width="100%">
                                    <div class="row ">
                                        <div class="col-12 "><div style="font-size: 12px; text-align:center; font-weight:800">{{ $item->outlet }}</div></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            <div class="col-5" style="padding:10px; margin:15px; width:100%; height:190px;  background: white; border-radius:10px;">
                                <div class="row">
                                    <div class="col-6"><b style="font-size: 10px"></b></div>
                                </div>
                            </div>
                            
                           
                            
                            <div class="col-5" style="padding:10px; margin:15px;  background: transparent; border-radius:10px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-5 mt-5" style="padding:10px; margin:15px;  background: transparent; border-radius:10px;">
                                <div>
                                    
                                </div>
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
                <a href="/home" style="float:right; color:aliceblue; font-size: 20px;">Home</a> <br><br>
                <a href="/profile" style="float:right; color:aliceblue; font-size: 20px;">Profile</a> <br><br>
                <a href="/stample" style="float:right; color:aliceblue; font-size: 20px;">Stempel</a> <br><br>
                <a href="" data-toggle="modal" data-target="#klaim" style="float:right; color:aliceblue; font-size: 20px;">Klaim Stempel</a> <br><br>
                <a href="/keluar" style="float:right; color:aliceblue; font-size: 20px;">Log Out</a><br><br>
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