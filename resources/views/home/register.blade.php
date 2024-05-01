@extends('layouts.home', ['title' => 'Home'])

@section('content')
<style>
    /* The container */
    .containers {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 14px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      color:#fff;
    }
    
    /* Hide the browser's default checkbox */
    .containers input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    
    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #fff;
      border-radius:5px;
    }
    
    /* On mouse-over, add a grey background color */
    .containers:hover input ~ .checkmark {
      background-color: #ccc;
    }
    
    /* When the checkbox is checked, add a blue background */
    .containers input:checked ~ .checkmark {
      background-color: #2196F3;
    }
    
    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    
    /* Show the checkmark when checked */
    .containers input:checked ~ .checkmark:after {
      display: block;
    }
    
    /* Style the checkmark/indicator */
    .containers .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    
    .invalid-feedback {
        color:yellow !important;
    }
    </style>
    <script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {
    
      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }
  
  }
</script>
<section class="section">
    <div class="container">
        <div class="row">
            <div
                class="col-12 col-sm-12">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:10px !important; height:800px" >
                   
                    <div style="justify-content: center; margin:auto; width:90%">
                        
                        <form method="POST" action="{{ route('postregistration') }}" class="needs-validation" onload="disableSubmit()"
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
                                <!--<img src="{{ App\Models\Setting::find(1)->program }}" alt="logo" width="200">-->
                                <img src="{{ asset('assets/img/fix/text.png') }}" alt="logo" width="140">
                            </div>
                                @endif
                            <h5 style="margin-top:40px">Registrasi</h5>
                            <div class="form-group">
                                <label for="email" style="color: #fff;">Nama*</label>
                                <input id="name" type="name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
                                    class="form-control @error('name') is-invalid @enderror input-rounded" name="name"
                                    placeholder="Masukkan name" value="{{ old('name') }}" tabindex="1"
                                    required autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Email*</label>
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
                                <input id="no_telp" type="number"
                                    class="form-control @error('no_telp') is-invalid @enderror input-rounded" name="no_telp"
                                    placeholder="Masukkan No Telepon" value="{{ old('no_telp') }}" tabindex="1"
                                    required autofocus>
                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password"  style="color: #fff;">Password*</label>
                                    <div style="font-size:8px; float:right; color:white; margin-top:5px">Minimal 6 Karakter perpaduan huruf dan angka</div>
                                </div>
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror input-rounded" name="password"
                                    placeholder="Masukkan Password Anda" value="{{ old('password') }}" tabindex="2" required>
                                    <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group" style="color: white">
                                <input type="checkbox" style="" name="pastikan"> Pastikan anda berusia telah berusia 18th keatas
                            </div> --}}
                            <label class="containers">Pastikan anda telah berusia 18th keatas
                                <input type="checkbox" name="konfirmasi" class="@error('konfirmasi') is-invalid @enderror" value="1" {{ !old('konfirmasi') ?: 'checked' }} onchange="activateButton(this)">
                                 @error('konfirmasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span class="checkmark"></span>
                              </label>
                              
                             

                              <input type="hidden" name="roles" value="BUYERS">

                            


                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-rounded" id="submit" tabindex="4">
                                    Daftar
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

