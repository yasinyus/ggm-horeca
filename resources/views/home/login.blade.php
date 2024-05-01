@extends('layouts.home', ['title' => 'Home'])

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div
                class="col-12 col-sm-12">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:100px !important; height:800px">
                    
                    {{-- <div class="card-header text-center mx-3">
                        
                        
                    </div> --}}
                    

                   
                    <div style="justify-content: center; margin:auto; width:90%">
                        
                        <form method="POST" action="{{ route('postlogin') }}" class="needs-validation"
                            novalidate="">
                            @csrf
                            <div class="form-group text-center">
                                <img src="{{ App\Models\Setting::find(1)->brand }}" class="box bounce-1" alt="logo" width="320">
                                <!--<img src="{{ App\Models\Setting::find(1)->program }}" alt="logo" width="200">-->
                                <img src="{{ asset('assets/img/fix/text.png') }}" alt="logo" width="320">
                            </div>
                            @if(session()->get('success'))
                            <div class="form-group text-center">
                           
                                <div class="alert alert-success text-center">
                                    {{ session()->get('success') }}
                                </div> 
                            </div>
                            @endif

                            @if(session()->get('error'))
                            <div class="form-group text-center">
                           
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('error') }}
                                </div> 
                            </div>
                            @endif

                            <div class="form-group mt-5">
                                <label for="email" style="color: #fff;">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-rounded" name="email"
                                    placeholder="Email" value="{{ old('email') }}" tabindex="1"
                                    required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password"
                                        class="control-label @error('password') is-invalid @enderror" style="color: #fff;">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control input-rounded" name="password"
                                    placeholder="Password" tabindex="2" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <p style="color:#fff;" class="text-center"><a href="{{ route('register') }}" style="color: yellow">Daftar</a> atau  <a href="/lupa" style="color: white; font-weight:500">Lupa Password</a></p>

                            


                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-block btn-rounded">
                                    Login
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