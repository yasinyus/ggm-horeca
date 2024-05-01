@extends('layouts.home', ['title' => 'Home'])

@section('content')
@if(auth()->user()->tgl_lahir == NULL)
{{-- <script type="text/javascript">
    $(window).on('load', function() {
        $('#lengkapi').modal('show');
    });
</script> --}}
@endif

<style>
        div#AvatarFileUpload {
            position: relative;
            width: 60px;
            height: 60px;
            background: #f9f9f9;
            border-radius: 50% 50%;
            margin: auto;
            /*margin-left:10px;*/
        }
    /* Image Preview Wrapper and Container */
        div#AvatarFileUpload > .selected-image-holder{
            width: 100%;
            height: 100%;
            border-radius: 50% 50%;
        }
        div#AvatarFileUpload > .selected-image-holder{
            width: 100%;
            overflow: hidden;
        }
        div#AvatarFileUpload > .selected-image-holder>img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-fit: center center;
        }
</style>

    <div class="container" style="height:900px">
        <!--<div class="container" style="background: url({{ asset('assets/img/fix/bg-panjang.png') }}) no-repeat fixed center;">-->
        <div class="row">
            <div
                class="">
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
                        
                                 @if(session()->has('gagal1'))
                                <script type="text/javascript">
                                    $(window).on('load', function() {
                                        $('#gagal1').modal('show');
                                    });
                                </script>
                                @endif

                                

                                @if(session()->has('success1'))
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#modalSuccess1').modal('show');
                                        });
                                    </script>
                                @endif
                                
                                 @if(session()->has('gagal2'))
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#gagal2').modal('show');
                                        });
                                    </script>
                                @endif

                                @if(session()->has('success2'))
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#modalSuccess2').modal('show');
                                        });
                                    </script>
                                @endif

                        <div class="row">
                            <div class="col-7 mt-2" style="background: white; border-radius: 0px 20px 20px 0px;">
                                <div class="row mt-3">
                                    <div class="col-4" style="border-radius: 50%; 50%">
                                        <div id="AvatarFileUpload">
                                            <div class="selected-image-holder">
                                                @if(auth()->user()->avatar == NULL)
                                                    <img src="{{ asset('assets/img/default-avatar.png') }}">
                                                @else
                                                    <img src="{{ auth()->user()->avatar }}">
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8"><p>
                                        Halo<br>
                                        <b style="font-weight: 800">{{ auth()->user()->name }}</b>
                                    </p></div>
                                </div>
                            </div>
                            <div class="col-5">
                                <a href="/stample">
                               <div class="row">
                                    <div class="col-6" style="margin-top:10px;">
                                        <img src="{{ App\Models\Setting::find(1)->stampel }}" width="80px" style="position:inherit; z-index:1000 !important">
                                    </div>
                                    <div class="col-6 mt-4" style="background: white; height:50px; width:30px !important; margin-top:25px !important;">
                                        <h2 style="float: right; padding-left:10px; position: absolute; margin-top:8px">{{ auth()->user()->stample }}</h2>
                                    </div>
                               </div>
                                </a>
                            </div>
                        </div>

                        @if(session()->get('success'))
                          <div class="alert alert-primary  alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

                        <h5 class="mt-4" style="color: #fff">Merchandise</h5>
                        <div class="row justify-content-center" style="overflow-y:scroll; overflow-x:hidden; height:600px;">
                            @foreach ($merch as $item )
                            
                            <div class="col-5" style="padding:10px; margin:10px;  background: white; border-radius:10px;">
                                <a href="detail/{{ $item->id }}">
                                    <img src="{{ $item->photo }}" width="100%">
                                    <div class="row">
                                        <div class="col-6"><b style="font-size: 10px">{{ $item->name }}</b></div>
                                        <div class="col-6"><b style="font-size: 10px">{{ $item->value }} Stempel</b></div>
                                    </div>
                                </a>
                            </div>
                           
                            @endforeach
                          
                            <div class="col-5" style="padding:10px; margin:15px;  background: transparent; border-radius:10px;">
                          
                            </div>
                            <div class="col-5" style="height:100px">
                              
                            </div>
                            <div class="col-6">
                                <a href="" data-toggle="modal" data-target="#klaim" style=""><img src="{{ asset('assets/img/btn-klaim-blue.png') }}" class="fix_footer box bounce-1" style="width:190px;"/></a>
                               
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

    <div class="modal fade" id="lengkapi" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: black; opacity:90%">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <h5 style="color:white">Lengkapi profil anda dan dapatkan hadiah menarik</h5>
            </div>
            <div class="modal-footer">
                <a href="/profile" class="btn btn-danger" style="background: linear-gradient(146.09deg, #901C1C 21.83%, #DC2F2F 80.7%); width: 151px;
                    height: 40px;
                    top: 680px;
                    left: 120px;
                    border-radius: 11px;
                    border:1px solid #901C1C;
                    ">Ok</a>
            </div>
        </div>
        </div>
    </div>
    
    <div class="modal fade" id="modalSuccess1" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: black; opacity:90%">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <img src="{{ asset('assets/img/fix/pop_pembelian.png') }}" width="100%">
            </div>
            <div class="modal-footer">
                <button type="button" style="color:#fff" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        </div>
       
    </div>

    <div class="modal fade" id="gagal1" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: transaparent">
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: transaparent">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <h5 style="color:#000">QR Tidak Ditemukan</h5>
            </div>
            <div class="modal-footer">
                <button type="button" style="color:#000" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        </div>
       
    </div>
    
    <div class="modal fade" id="gagal2" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: transaparent">
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: transaparent">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <h5 style="color:#000">QR Tidak Ditemukan</h5>
            </div>
            <div class="modal-footer">
                <button type="button" style="color:#000" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
    </style>
        <div class="modal fade" id="modalSuccess2" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: black; opacity:90%">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <img src="{{ asset('assets/img/fix/pop_penukaran.png') }}" width="100%">
            </div>
            <div class="modal-footer">
                <button type="button" style="color:#fff" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        </div>
       
    </div>
    




@endsection