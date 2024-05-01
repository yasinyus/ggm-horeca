@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div
                class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:100px !important;">
                   
                    <div >
                        
                        <form method="POST" action="{{ route('login') }}" class="needs-validation"
                            novalidate="">
                            @csrf
                            
                            <div class="form-group text-center">
                                <img src="{{ App\Models\Setting::find(1)->brand }}" alt="logo" width="200">
                            <p style="color: #fff; font-size:22px;">Content Managament System</p>
                            </div>
                            @if(session()->has('error'))
                            <div class="form-group text-center">
                           
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('error') }}
                                </div> 
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="email" style="color: #fff;">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
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
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password" tabindex="2" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            


                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-block" style="color: #fff; background: linear-gradient(180deg, #7A0202 0%, #690606 100%);" tabindex="4">
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