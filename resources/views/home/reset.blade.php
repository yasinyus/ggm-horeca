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
                        
                        <form method="POST" action="{{ route('resetPass') }}" class="needs-validation"
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
                                <img src="{{ App\Models\Setting::find(1)->brand }}" class="box bounce-1" alt="logo" width="150">
                                <img src="{{ App\Models\Setting::find(1)->program }}" alt="logo" width="200">
                            </div>
                                @endif
                            <h5>Reset Password</h5>

                       

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Password Baru</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror input-rounded" name="password"
                                    placeholder="Masukkan Password Baru" value="{{ old('password') }}" tabindex="1"
                                    required autofocus>
                                    <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-lg btn-block btn-rounded" tabindex="4">
                                    Simpan
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