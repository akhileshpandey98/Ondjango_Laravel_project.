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

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/lib_cover.png') }}'); ">

        <div class="row">
            {{-- logo --}}
            <div class="col-sm-8">
                <div div class="col-sm-4 ">
                    <a class="navbar-brand" href="{{ '/' }}"> <img src="image\logo.png"
                            class="img-fluid w-100 p-4 d-block" alt="logo" min-height="20vh;" /> </a>
                </div>
            </div>
            {{-- ḷanguage --}}
            <div class="col-sm-3 ps-5 p-4">
                <select class=" text-light btn btn-outline-light fs-3" style="background: none; border-radius: 10px;">
                    <option selected class="text-dark" vlaue="">Language</option>
                    <option class="text-dark" vlaue="English">English</option>
                    <option class="text-dark" vlaue="French">French</option>
                    <option class="text-dark" vlaue="Spanisg">Spanish</option>
                    <option class="text-dark" vlaue="German">German</option>
                    <option class="text-dark" vlaue="portuguese">Portuguese</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-7">
                <p class="text-center fw-bold display-5 text-light">I Want To Learn</p>
            </div>


            {{-- slider --}}
            <div class="row ">
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
                                                    <a href="{{ asset('portguses') }}"> <img
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


  {{-- skill  English Commination --}}
    <div class="container-fluid">
              <div class="row p-2">
            <div class="ps-5">
                <p class="fs-1 fw-bold">skilled in<br />
                    <b class="display-4 text-danger fw-bold">English communication</b>
                <div class="col-sm-5">
                    <img src="{{ 'image/libe_1Underline.png' }}" alt="img" class="img-fluid pe-5 w-100"
                        height="20vh" />
                </div>
                </p>
            </div>

            {{-- slider --}}
            <div class="row justify-content-center">
                <div class="col-sm-1"></div>
                <div class="col-sm-10  justify-content-center">
                    <div id="carouselskill" class="carousel slide py-5 " data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselskill" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"
                                style="background:#14195f; border-radius: 20px;"></button>
                            <button type="button" data-bs-target="#carouselskill" data-bs-slide-to="1"
                                aria-label="Slide 2" style="background:#14195f; border-radius: 20px;"></button>
                            <button type="button" data-bs-target="#carouselskill" data-bs-slide-to="2"
                                aria-label="Slide 3" style="background:#14195f; border-radius: 20px;"></button>
                        </div>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                {{-- card1 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card1 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item">
                                {{-- card2 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card3 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                {{-- card3 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card5 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#14195f;">
                                            <img src="{{ asset('image\libr_man2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- button --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselskill"
                            data-bs-slide="prev">
                            <span class="carousel-control" style="height:10vh;"
                                aria-hidden="true"><x-ionicon-arrow-back-outline
                                    style=" width:4rem; background:black; color:white; opacity: .7; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselskill"
                            data-bs-slide="next">
                            <span class="carousel-control" aria-hidden="true"><x-ionicon-arrow-forward-outline
                                    style=" width:4rem; background:black; color:white;  opacity: .7; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        {{-- end slider --}}

        {{-- Language Courses --}}
        <div class="row set_img set_img" style="background-image: url('{{ asset('image/libr_middle.jpg') }}');"
            class="img-fluid w-100">

            <div class="row ">
                <div class="py-5">
                    <p class="text-end display-5 fw-bold text-light pt-5">Additional<br />
                        <b class="text-end fw-bold display-1" style="color:#fcd116">Language Courses</b>
                    <p class=" text-end fs-3 text-light me-5">
                        Enhance your English to unlock exclusive bonus courses!
                    </p>
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-1"></div>
                <div class="col-sm-10  justify-content-center mb-5">
                    <div id="carouselgirl" class="carousel slide py-5 " data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselgirl" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"
                                style="background:#fcd116; border-radius: 20px;"></button>
                            <button type="button" data-bs-target="#carouselgirl" data-bs-slide-to="1"
                                aria-label="Slide 2" style="background:#fcd116; border-radius: 20px;"></button>
                            <button type="button" data-bs-target="#carouselgirl" data-bs-slide-to="2"
                                aria-label="Slide 3" style="background:#fcd116; border-radius: 20px;"></button>
                        </div>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                {{-- card1 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card1 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item">
                                {{-- card2 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card3 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                {{-- card3 --}}
                                <div class="col-sm-9 d-flex m-auto">
                                    {{-- card5 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl1.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 22rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- card2 --}}
                                    <div class="col-sm-6 p-4">
                                        <div class="card  text-white  mb-5 "
                                            style="min-width: 22rem; border-radius: 25px; background:#fcd116;">
                                            <img src="{{ asset('image\libe_girl2.png') }}" class="card-img m-auto"
                                                alt="..."
                                                style="min-width: 23rem; height: 520px; border-radius: 25px;">
                                            <div
                                                class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                                                <div class="card-footer w-100 text-center fs-1 "
                                                    style="background:#14195f; opacity: .8;  border-radius: 25px;">
                                                    <p class="zoom text-center">Access → </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- button --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselgirl"
                            data-bs-slide="prev">
                            <span class="carousel-control" style="height:10vh;"
                                aria-hidden="true"><x-ionicon-arrow-back-outline
                                    style=" width:4rem; background:black; color:white; opacity: .7; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselgirl"
                            data-bs-slide="next">
                            <span class="carousel-control" aria-hidden="true"><x-ionicon-arrow-forward-outline
                                    style=" width:4rem; background:black; color:white;  opacity: .7; border-radius: 10px;" /></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="col-sm-1"></div>
            </div>


        </div>
    </div>


    <div class="container-fluid"  style="transform: translateY(-65px);">
        {{-- Business --}}
        <div class="row set_img set_img" style="background-image: url('{{ asset('image/libr_mid.png') }}');"
            class="img-fluid w-100">

            <div class="row p-5 py-4 mb-5">
                <div class="py-5 p-2">
                    <p class="display-1 fw-bold" style="color:#7481db;">Business</p>
                    <p class="fs-2 text-light">"Boost your Business English skills with these lessons!</p>
                </div>


                <div class="card  text-white p-1 mb-5 m-auto"
                    style="width: 28rem; border-radius: 20px; background:#391f60; border:none;">
                    <img src="{{ asset('image\libr_man3.png') }}" class="card-img m-auto" alt="..."
                        style="width: 25rem height: 506px; border-radius: 25px;">
                    <div class="card-img-overlay d-flex justify-content-center align-items-end p-0">
                        <div class="card-footer w-100 text-center fs-1 m-1"
                            style="background:#14195f; opacity: .8;  border-radius: 25px;">
                            <p class="zoom text-center">Access → </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        {{-- end-container --}}
    </div>


    {{-- footer --}}
    <div class="container-fluid">
        <footer>
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
                        <div class="text-light fs-5 fw-bold ">
                            <ul class="d-flex m-auto">
                                <li class=" text-dark ms-auto p-1">Terms of Use</li>
                                <li class=" text-dark ms-auto p-1">Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>




    <!-- Add your JS aos Animaruin here -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
