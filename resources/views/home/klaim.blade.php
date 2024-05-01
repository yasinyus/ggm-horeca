@extends('layouts.home', ['title' => 'Home'])
<!--<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>-->
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container" style="height:900px">
        <div class="row">
            <div class="">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:10px !important;">
                   
                    <div style="justify-content: center; margin:auto; width:80%">
                        
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


                        <h5 class="mt-5" style="color: #fff;">Scan QR Outlet</h5>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-11" style="background: white; border-radius:20px;">
                                @if(session()->has('gagal'))
                                <script type="text/javascript">
                                    $(window).on('load', function() {
                                        $('#gagal').modal('show');
                                    });
                                </script>
                                @endif

                                

                                @if(session()->has('success'))
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#modalSuccess').modal('show');
                                        });
                                    </script>
                                @endif


                                <form action="{{ route("hasilClaim") }}" method="post" id="form">
                                    @csrf
                                    <div style="height:100%; width:100%" id="reader"></div>
                                    <input type="hidden" id="result" name="outlet_id">
                                </form>
                                <script>
                                    const scanner = new Html5QrcodeScanner('reader', {
                                    qrbox: {
                                    width: 250,
                                    height: 250,
                                    },
                                    fps: 20,
                                    });
                                    
                                    scanner.render(success, error);
                                    function success(result) {
                                    document.getElementById('result').value = result;
                                    document.getElementById('form').submit();
                                    scanner.clear();
                                    document.getElementById('reader').remove();
                                    }
                                    function error(err) {
                                    console.error(err);
                                    }
                                </script>
                                
                            </div>
                            <div class="col-12 mt-5">
                                <ol>
                                    <li style="color:white">Berikan izin pada kamera</li>
                                    <li style="color:white">Kemudian pilih kemara belakang</li>
                                    <li style="color:white">Setelah kamera terbuka</li>
                                    <li style="color:white">Arahkan pada QR Code yang diberikan oleh Petugas Outlet tersebut</li>
                                    <li style="color:white">Setelah berhasil terverifikasi</li>
                                    <li style="color:white">Jumlah Stempel kamu akan bertambah</li>
                                </ol>
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
                <a href="/klaim" data-toggle="modal" data-target="#klaim" style="float:right; color:aliceblue; font-size: 20px;">Klaim Stempel</a> <br><br>
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







@endsection