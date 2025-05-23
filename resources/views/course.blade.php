<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- use title page --}}
    <title>@yield('title')</title>
    <!-- Add your CSS cdn files here -->
    <link href="{{ asset('css\custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css\bootstrap_cdn.css') }}" rel="stylesheet" />
    {{-- Add yous js cdn  files --}}
    <script src="{{ asset('js\js_cdn.js') }}"></script>
    {{-- animation Aos css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/course-bg.jpg') }}'); ">

        <div class="row">
            {{-- logo --}}
            <div class="col-sm-8">
                <div div class="col-sm-4 p-4">
                    <a class="navbar-brand" href="{{ '/' }}"> <img src="image\logo.png"
                            class="img-fluid w-100  d-block" alt="logo" height="40vh;" width="100%;" /> </a>
                </div>
            </div>
            {{-- ḷanguage --}}
            <div class="col-sm-3 ps-5 pt-5 ">
                <select class=" text-light btn btn-outline-light fs-3"
                    style="background: none; border-radius: 10px;">
                    <option selected class="text-dark" vlaue="">Language</option>
                    <option class="text-dark" vlaue="English">English</option>
                    <option class="text-dark" vlaue="French">French</option>
                    <option class="text-dark" vlaue="Spanisg">Spanish</option>
                    <option class="text-dark" vlaue="German">German</option>
                    <option class="text-dark" vlaue="portuguese">Portuguese</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-center ">
            <div class="col-sm-7 ">
                <p class="text-center fw-bold display-3" style="color:#f9e04c;">
                    Hello! <br />
                    <b class="display-5 fw-bold text-light">What will you be learning today?</b>
                </p>
            </div>
        </div>

        {{-- middle --}}
        <div class="row set_img " style="background-image: url('{{ asset('image/course_mid.png') }}'); "
            class="img-fluid w-100">
            {{-- row1 --}}
            <div class="row py-5 justify-content-center" style="margin-top:5%;">
                {{-- <div class="col-sm-9 py-5 "> --}}
                <div class="col-sm-2 p-3 ms-5">
                   <div class="card " style="border-radius: 30px; background: #2537a8; min-height: 32vh;">
                  <div class="py-4 m-auto">
                    <a href="{{ asset('library') }}"> <img src="{{ asset('image/c_english.png') }}" class=" img-fluid" /></a>
                           <p class="text-light text-center fs-2">English</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 p-3 ms-5">
                    <div class="card " style="border-radius: 30px; background: #2537a8; min-height: 32vh;">
                        <div class="py-4 m-auto">
                            <a href="{{ asset('french') }}"> <img src="{{ asset('image/c_French.png') }}" class=" img-fluid" /></a>
                            <p class="text-light text-center fs-2">French</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-2 p-3 ms-5">
                    <div class="card " style="border-radius: 30px; background: #2537a8; min-height: 32vh;">
                        <div class="py-4 m-auto">
                            <a href="{{ asset('spanish') }}"> <img src="{{ asset('image/c_Spanish.png') }}" class=" img-fluid" /></a>
                            <p class="text-light text-center fs-2">Spanish</p>
                        </div>

                    </div>
                </div>
                {{-- row2 --}}
                <div class="row justify-content-center py-3 mb-5">
                    <div class="col-sm-2 p-3 ms-5 mb-2">
                        <div class="card " style="border-radius: 30px; background: #2537a8; min-height: 32vh;">
                            <div class="py-4 m-auto">
                                <a href="{{ asset('german') }}"> <img src="{{ asset('image/c_German.png') }}" class=" img-fluid" /></a>
                                <p class="text-light text-center fs-2">German</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-2 p-3 ms-5 mb-2">
                        <div class="card " style="border-radius: 30px; background: #2537a8; min-height: 32vh;">
                            <div class="py-4 m-auto">
                                <a href="{{ asset('portuguese') }}"> <img src="{{ asset('image/c_Portuguese.png') }}" class=" img-fluid" /></a>
                                <p class="text-light text-center fs-2">Portuguese</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- foot --}}
        <div class="row">
            {{-- logo --}}
            <div class="col-sm-8">
                <div div class="col-sm-3 p-4">
                    <a class="navbar-brand" href="{{ '/' }}"> <img src="image\logo.png" class="img-fluid w-100  d-block"
                            alt="logo" height="40vh;" width="100%;" /> </a>
                </div>
            </div>
            {{-- ḷanguage --}}
            <div class="col-sm-4 ps-5 p-4">
                <div class="text-light fs-5 fw-bold">
                    <ul class="d-flex">
                        <li class="ms-5">Terms of Use</li>
                        <li class="ms-5">Privacy Policy</li>
                    </ul>
                </div>
            </div>

            {{-- end container --}}
        </div>

        <!-- Add your JS aos Animaruin here -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

</body>
</html>
