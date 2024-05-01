@extends('layouts.home', ['title' => 'Home'])

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
            .error {
                color: red
            }

            #image {
                display: none;
            }
        </style>

        <script type="text/javascript">
            $(document).ready(function(){
              $('#laravel-image-upload').on('change', function(event){
                    event.preventDefault();

                    var url = $('#laravel-image-upload').attr('data-action');

                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            $('#image').attr('src', response.image).show();

                            alert(response.message)
                        },
                        error: function(response) {
                            $('.error').remove();
                            $.each(response.responseJSON.errors, function(k, v) {
                                $('[name=\"image\"]').after('<p class="error">'+v[0]+'</p>');
                            });
                        }
                    });
                });

            });
        </script>

<style>
    div#AvatarFileUpload {
    position: relative;
    width: 150px;
    height: 150px;
    background: #f9f9f9;
    border: 3px solid #bbb;
    border-radius: 50% 50%;
    margin: auto;
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
 
/* Image Selector to Browse Image to Upload */
div#AvatarFileUpload > .avatar-selector{
    position: absolute;
    bottom: 8px;
    right: 19%;
    width: 20px;
    height: 20px;
}
div#AvatarFileUpload > .avatar-selector input[type="file"]{
    display: none;
}
div#AvatarFileUpload > .avatar-selector > .avatar-selector-btn{
    width: 100%;
    height: 100%;
    background: #f5f5f59e;
    padding: 7px 7px;
    border-radius: 50% 50%;
}
div#AvatarFileUpload > .avatar-selector > .avatar-selector-btn>img{
    width: 100%;
    height: 100%;
    object-fit: scale-down;
    object-position: center center;
    z-index: 2;
}
</style>
<section class="section">
    <div class="container">
        <div class="row">
            <div
                class="col-12 col-sm-12">
                <div class="login-brand">
                    
                </div>

                <div style="padding-top:10px !important; height:800px">

                   
                    <div style="justify-content: center; margin:auto; width:90%">
                        
                        {{-- <div class="row-fluid"> --}}
                            <div class="form-group text-center">
                                <a href="/home">
                                <img src="{{ App\Models\Setting::find(1)->brand }}" class="box bounce-1" alt="logo" width="150">
                                </a>
                                <br>
                                <img src="{{ App\Models\Setting::find(1)->program }}" alt="logo" width="150">
                            </div>

                            <div class="col-12 mt-5" style="text-align: center;">
                                {{-- <img src="{{ asset('assets/img/avatar/avatar-1.png') }}" width="40%" style="border-radius:50%"> --}}
                                <!-- Avatar File Input Wrapper  -->
                                <div id="AvatarFileUpload">
                                    <!-- Image Preview Wrapper -->
                                    <div class="selected-image-holder">
                                        @if (auth()->user()->avatar == NULL)
                                            <img src="{{ asset('assets/img/default-avatar.png') }}" alt="AvatarInput">
                                        @else
                                            <img src="{{ auth()->user()->avatar }}" alt="">
                                        @endif
                                        
                                    </div>
                                    <!-- Image Preview Wrapper -->
                                    <!-- Browse Image to Upload Wrapper -->
                                    <div class="avatar-selector">
                                        <a href="#" class="avatar-selector-btn">
                                            <img src="{{ asset('assets/img/camera.svg') }}" alt="cam">
                                        </a>
                                        <form data-action="{{ route('updateAvatar') }}" method="POST" enctype="multipart/form-data" id="laravel-image-upload">
                                            @csrf
                                        <input type="file" accept="image/*;capture=camera" name="avatar" id="avatar">
                                    </form>
                                    </div>
                                    <!-- Browse Image to Upload Wrapper -->
                                </div>
                            <!-- Avatar File Input Wrapper  -->
                            </div>
                        {{-- </div> --}}

                       

                        <form method="POST" action="{{ route('editUser') }}" class="needs-validation " id="formEdit"
                            novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email" style="color: #fff;">Nama</label>
                                <input id="name" type="name"
                                    class="form-control @error('name') is-invalid @enderror input-rounded" name="name"
                                    placeholder="Masukkan Name" value="{{ auth()->user()->name }}" tabindex="1"
                                    required autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">E-mail</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-rounded" name="email"
                                    placeholder="Masukkan Alamat Email" value="{{ auth()->user()->email }}" tabindex="1"
                                    disabled autofocus>
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
                                    placeholder="Masukkan No Telepon" value="{{ auth()->user()->no_telp }}" tabindex="1"
                                    required autofocus>
                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="row mt-4">
                                {{-- <div class="col-6"><a href="" id="buttonEdit" style="color:white">Edit</a></div> --}}
                                <div class="col-6"><input class="btn btn-warning btn-warnings" style="background: transparent; border:none" type="button" id="buttonEdit" value="Edit"></div>
                                {{-- <input type="button" id="buttonEdit" value="Submit"> --}}
                                <div class="col-6 "><a href="/reset" class="float-right mt-2" style="color:white; font-size:13px">Reset Password</a></div>
                            </div>
                            
                            


                            <div class="form-group">
                                @if(auth()->user()->jk == NULL)
                                <a href="/lengkapi"  class="btn btn-lg btn-block btn-rounded" tabindex="4">Lengkapi Profil</a>
                                @else
                                <a href="/lengkapi"  class="btn btn-lg btn-block btn-rounded" tabindex="4">Profil Lengkap</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
    <script type="text/javascript">
        $(document).ready(function () {
            $( "#buttonEdit" ).click(function() {
                $( "#formEdit" ).submit();
            });
        });
        </script>

    <script>
        // Main Wrapper Selector
        const avatarFileUpload = document.getElementById('AvatarFileUpload')
        // Preview Wrapper Selector
        const imageViewer = avatarFileUpload.querySelector('.selected-image-holder>img')
        // Image Selector button Selector
        const imageSelector = avatarFileUpload.querySelector('.avatar-selector-btn')
        // Image Input File Selector
        const imageInput = avatarFileUpload.querySelector('input[name="avatar"]')
        
        /** Trigger Browsing Image to Upload */
        imageSelector.addEventListener('click', e => {
            e.preventDefault()
            // Trigger Image input click
            imageInput.click()
        })
        
        /** IF Selected Image has change */
        imageInput.addEventListener('change', e => {
            // Open File eader
            var reader = new FileReader();
            reader.onload = function(){
                // Preview Image
                imageViewer.src = reader.result;
            };
            // Read Selected Image as DataURL
            reader.readAsDataURL(e.target.files[0]);
        })
    </script>
</section>



@endsection