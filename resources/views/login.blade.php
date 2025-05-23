<header>
    <!-- Your header content -->
    @include(' layouts\header')
</header>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css\custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css\bootstrap_cdn.css') }}" rel="stylesheet" />
    {{-- Add yous js cdn  files --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{ asset('js\js_cdn.js') }}"></script>
    @section('title', 'Login')
</head>

<body>
    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/friends.png') }}');" alt="friends_img"  data-aos="fade-right"  data-aos-duration="2000">

        <div class="row">

            <div class="col-sm-6 set_img py-5" style="background-image: url('{{ asset('image/login_texture.png') }}'); height: 200vh;">
                {{-- <img src="{{ asset('image\login_texture.png') }}" alt="login_texture_img" class="set_img" /> --}}
                <div class="text-overlayi col-sm-6">
                    {{-- logo --}}
                    <div class="col-sm-6 p-3 ms-4 mt-5">
                        <a href="{{asset ('/') }}"><img src="image\logo.png" class="img-fluid " alt="logo" height="90vh;" width="100%;" /></a>
                    </div>
                    {{-- start form --}}
                    <form>
                        <div class="col-sm-6 ms-5 ">
                            <h1 class="text-center fw-bold mt-4 display-5">Welcome!</h1>
                            <p class="text-center">Log In to Sharpen Your Language Skills.</p>
                            <div class="mb-3  text-center">
                                <label for="email1" class="form-label fs-3">Email</label>
                                <input type="email" class="form-control" name="email" id="email1"
                                    style="background: none; height: 8vh;" />
                                    
                            </div>
                            {{-- <span class="fs-5 fw-bold">EX:Thomas Smith</span> --}}
                            <div class="mb-1 text-center">
                                <label for="passd" class="form-label fs-3">Password</label>
                                <input type="password" class="form-control" name="pass" id-="passd"
                                    style="background: none; height: 8vh;" />
                            </div>
                            <p class="text-end" style="color: #d6d2de;">Forgate Password?</p>
                            <center>
                                <div class="mb-2 m-auto">
                                    <button class="btn btn-light text-dark fw-bold col-sm-6 btn-lg d-block fs-4"
                                        type="submit">LogIn</button>
                                   <a href="{{ asset('signup') }}" style="text-decoration: none;color:white;"> <p class="mt-2 text-center">No account yet? Sign Up</p></a>
                                </div>
                            </center>



                        </div>
                    </form>

                </div>

            </div>
            {{-- <img src="{{ asset('image\login_texture.png') }}" alt="login_texture_img" class="set_img" /> --}}

        </div>


    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       AOS.init();
     </script>
</body>

</html>
