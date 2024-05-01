@extends('layouts.home', ['title' => 'Home'])

@section('content')

    <section class="section">
    <div class="container">
        <div class="row">
            <div
                class="col-12 col-sm-12">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:30px !important;">
                   
                    <div style="justify-content: center; margin:auto; width:90%">
                        
                        <form method="POST" action="{{ route('login') }}" class="needs-validation"
                            novalidate="">
                            @csrf
                            @if(session()->has('error'))
                            <div class="form-group text-center">
                           
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('error') }}
                                </div> 
                            </div>
                            @else
                            <div class="form-group text-center">
                                <img src="{{ App\Models\Setting::find(1)->brand }}" class="box bounce-1" alt="logo" width="150"> <br>
                                <img src="{{ asset('assets/img/fix/text.png') }}" alt="logo" width="140">
                                <!--<img src="{{ App\Models\Setting::find(1)->program }}" alt="logo" width="200">-->
                            </div>
                                @endif
                            <h5 style="margin-top:100px">Lupa Password</h5>

                            <div class="form-group" >
                                <label for="email" style="color: #fff;">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-rounded" name="email"
                                    placeholder="Masukkan Alamat Email" value="{{ old('email') }}" tabindex="1"
                                    required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">No Telepon</label>
                                <input id="no_telp" type="no_telp"
                                    class="form-control @error('no_telp') is-invalid @enderror input-rounded" name="no_telp"
                                    placeholder="Masukkan No Telepon" value="{{ old('no_telp') }}" tabindex="1"
                                    required autofocus>
                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            
                            <p style="color: #fff"><i>*link untuk lupa password akan dikirim melalui email anda</i></p>

                            


                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-lg btn-block btn-rounded" tabindex="4">
                                    Kirim
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection