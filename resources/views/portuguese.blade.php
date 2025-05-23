<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- use title page --}}
    <title>@yield('french')</title>
    <!-- Add your CSS cdn files here -->
    <link href="{{ asset('css\custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css\bootstrap_cdn.css') }}" rel="stylesheet" />
    {{-- Add yous js cdn  files --}}
    <script src="{{ asset('js\js_cdn.js') }}"></script>
    {{-- animation Aos css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/l_s-frame.png') }}'); ">

      
        <div class="row py-3">
            {{-- logo --}}
            <div class="col-sm-5  mt-2">
                <div div class="col-sm-6 ">
                    <a class="navbar-brand" href="{{ '/' }}"> <img src="image\logo.png"
                            class="img-fluid w-100 p-4 d-block" alt="logo" min-height="20vh;" /> </a>
                </div>
            </div>
            {{-- ḷanguage --}}
            <div class="col-sm-3  mt-2">
                <div class="col-sm-6 ms-auto ">
                    <a href="{{ asset('library') }}"><button class="btn btn-outline fs-4 text-light p-2"
                            style="background: #234890; border-radius: 10px;">Go To Library</button></a>
                </div>
            </div>

            <div class="col-sm-2  mt-2">
                <select class=" text-light btn btn-outline-light fs-3" style="background: none; border-radius: 10px;">
                    <option selected class="text-dark" vlaue="">Language</option>
                    <option class="text-dark" vlaue="English">English</option>
                    <option class="text-dark" vlaue="French">French</option>
                    <option class="text-dark" vlaue="Spanisg">Spanish</option>
                    <option class="text-dark" vlaue="German">German</option>
                    <option class="text-dark" vlaue="portuguese">Portuguese</option>
                </select>
            </div>

            <div class="col-sm-1 ">
                <a href="{{ asset('basicprofile') }}" style="text-decoration: none; color:white;">
                    <span> <x-ionicon-person-circle-outline style=" width:5rem; margin-left:2px; background: none; " />
                    </span>
                </a>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-7">
                <p class="text-center fw-bold display-5 text-light">I Want To Learn</p>
            </div>


            {{-- slider --}}
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row p-4">
                        <div id="carouselExampleIndicators" class="carousel slide py-5">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"
                                    style="background:none;"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" style="background:none;"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3" style="background:none;"></button>
                            </div>
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    {{-- card1 --}}
                                    <div class="col-sm-9 d-flex m-auto  ">
                                        {{-- 1 --}}
                                        <div class="col-sm-2">
                                            <div class=" " style="border-radius: 30px;  ">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('library') }}"> <img
                                                            src="{{ asset('image/c_english.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-4">English</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('french') }}"> <img
                                                            src="{{ asset('image/c_French.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class="m-auto">
                                                    <a href="{{ asset('spanish') }}"> <img
                                                            src="{{ asset('image/c_spanish.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 4 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('german') }}"> <img
                                                            src="{{ asset('image/c_German.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 5 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('portuguese') }}"> <img
                                                            src="{{ asset('image/c_Portuguese.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- card2 --}}
                                <div class="carousel-item">
                                    <div class="col-sm-9 d-flex m-auto">
                                        {{-- 6 --}}
                                        <div class="col-sm-2">
                                            <div class=" " style="border-radius: 30px;  ">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('library') }}"> <img
                                                            src="{{ asset('image/c_english.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-4">English</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 7 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('french') }}"> <img
                                                            src="{{ asset('image/c_French.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 8 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('spanish') }}"> <img
                                                            src="{{ asset('image/c_Spanish.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 9 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class="m-auto">
                                                    <a href="{{ asset('german') }}"> <img
                                                            src="{{ asset('image/c_German.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>

                                        {{-- 10 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px; ">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('portuguese') }}"> <img
                                                            src="{{ asset('image/c_Portuguese.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- card3 --}}
                                <div class="carousel-item">
                                    <div class="col-sm-9 d-flex m-auto">
                                        {{-- 11 --}}
                                        <div class="col-sm-2">
                                            <div class=" " style="border-radius: 30px;  ">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('library') }}"> <img
                                                            src="{{ asset('image/c_english.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-4">English</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 12 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('french') }}"> <img
                                                            src="{{ asset('image/c_French.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 13 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('spanish') }}"> <img
                                                            src="{{ asset('image/c_Spanish.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                        {{-- 14 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px;">
                                                <div class="m-auto">
                                                    <a href="{{ asset('german') }}"> <img
                                                            src="{{ asset('image/c_German.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>

                                        {{-- 15 --}}
                                        <div class="col-sm-2  ms-5">
                                            <div class=" " style="border-radius: 30px; ">
                                                <div class=" m-auto">
                                                    <a href="{{ asset('portuguese') }}"> <img
                                                            src="{{ asset('image/c_Portuguese.png') }}"
                                                            class=" img-fluid" /></a>
                                                    {{-- <p class="text-light text-center fs-2">French</p> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- button --}}
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control" aria-hidden="true"><x-ionicon-arrow-back-outline
                                    style=" width:3rem; background:#581b3c; color:white; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control" aria-hidden="true"><x-ionicon-arrow-forward-outline
                                    style=" width:3rem; background:#581b3c; color:white; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        {{-- end slider --}}
    </div>



    <div class="container-fluid" style="transform: translateY(-50px);">
        {{-- Business --}}
        <div class="row set_img set_img" style="background-image: url('{{ asset('image/lag_portguses.png') }}');"
            class="img-fluid w-100">

            <div class="row  mb-5">
                <div class="mt-5">
                    <p class="display-2 fw-bold text-center text-light">Portuguese</p>

                </div>

                <div class="col-sm-12">
                    <hr class="text-light" style="transform: translateY(220px);">
                    <div class="card text-white mb-5 m-auto"
                        style="width: 21rem; border-radius: 20px; background:#0b1d78; border: none; ">
                        <img src="{{ asset('image\l_portguses.png') }}" class="card-img " alt="..."
                            style="">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end ">
                            <div class="card-footer w-100 text-center fs-1 "
                                style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                <p class="zoom text-center">Access → </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        {{-- footer --}}
        <div class="row p-2">
            {{-- logo --}}
            <div class="col-sm-7">
                <div div class="col-sm-3 ps-4">
                    <a class="navbar-brand" href="{{ '/' }}"> <img src="image\logo.png"
                            class="img-fluid w-100  d-block" alt="logo" height="40vh;" width="100%;" />
                    </a>
                </div>
            </div>
            {{-- ḷanguage --}}
            <div class="col-sm-5 ">
                <div class="col-sm-9">
                    <div class=" fs-5 fw-bold ">
                        <ul class="d-flex m-auto">
                            <li class=" text-dark ms-auto p-1">Terms of Use</li>
                            <li class=" text-dark ms-auto p-1">Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        {{-- end-container --}}
    </div>



    <!-- Add your JS aos Animaruin here -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
