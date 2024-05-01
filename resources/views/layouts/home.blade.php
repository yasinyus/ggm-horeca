<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title>{{ App\Models\Setting::find(1)->nama_program }}</title>


    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon.png') }}">
    <style>
        body, a, th, tr, p, label {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300 !important;
            font-style: normal;
        }

        .password-toggle-icon {
            float: right;
            right: 10px;
            margin-top: -29px;
            position: relative;
            z-index: 2;
        }

        .password-toggle-icon i {
            font-size: 18px;
            line-height: 1;
            color: #333;
            transition: color 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .password-toggle-icon i:hover {
            color: #000;
        }

        h5{
            font-size: 16px;
            font-weight: 600;
            line-height: 22px;
            letter-spacing: 0.30000001192092896px;
            text-align: left;
            color: #fff
        }

        .btn-warnings {
            background: transparent !important;
        }

        .btn-warnings:hover {
            background: transparent !important;
            text-decoration: underline;
        }

        .btn-rounded {
            border-radius:10px; 
            /* margin : 0 auto;  */
            width: 170px; 
            color: #fff; 
            background: linear-gradient(146.09deg, #DA0F0F 21.83%, #DC2F2F 80.7%);
            position: fixed;;
            bottom:80px;
            margin-left: 90px;
            /*margin-left: 73px;*/
        }

        .btn-rounded:hover {
            background: rgb(93, 3, 3) !important;
            color: #fff
        }


        .box {
            align-self: flex-end;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            margin: 0 auto 0 auto;
            transform-origin: bottom;
        }

        .input-rounded {
            border-radius: 10px;
        }

        .form-group {
            margin-bottom:10px;
        }

        .bounce-1 {
            animation-name: bounce-1;
            animation-timing-function: linear;
        }
        @keyframes bounce-1 {
            0%   { transform: translateY(0); }
            50%  { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
        @media only screen and (max-width: 468px) {
        /* For mobile phones: */
            .body {
                background: rgb(10, 10, 10); 
                background-image: url({{ App\Models\Setting::find(1)->background_fe }}); 
                /* background-image: url({{ asset('assets/img/bg-home-dark.png') }}); */
                background-repeat: no-repeat; 
                background-size: cover;
            }

                .fix_footer{
                position:fixed;
                bottom:0px;
                width: 100%;
                z-index: 100;
            }
        }

        @media only screen and (max-width: 8600px) and (min-width: 468px) {
        /* For mobile phones: */
            .body {
                background: rgb(10, 10, 10); 
                background-repeat: no-repeat; 
                background-size: cover;
            }

            #app {
                content: center;
                margin: auto;
                width: 390px;
                height: 800px;
                background-image: url({{ App\Models\Setting::find(1)->background_fe }}); 
            }

            .fix_footer{
                position:fixed;
                bottom:0px;
                width: 390px;
                z-index: 100;
            }
            
        }

        #exampleModal {
            top:12%;
            outline: none;
            overflow:hidden;
            
        }

        

    </style>
</head>
<body class="body">
    <div id="app">
        {{-- Yield Content --}}
        @yield('content')
        <!--<img src="{{ asset('assets/img/footer-img.png') }}" class="fix_footer"/>-->
    </div>
    

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script> --}}
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    {{-- <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
    <script>
       const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".password-toggle-icon i");

        togglePassword.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        }
        });
    </script>
   
</body>

</html>