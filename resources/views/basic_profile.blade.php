<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- use title page --}}
    <title>@yield('Basic_profile')</title>
    <!-- Add your CSS cdn files here -->
    <link href="{{ asset('css\custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css\bootstrap_cdn.css') }}" rel="stylesheet" />
    {{-- Add yous js cdn  files --}}
    <script src="{{ asset('js\js_cdn.js') }}"></script>
    {{-- animation Aos css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-tabs .nav-link.active {
            background-color: #001f7f;
            color: white;
            border-radius: 15px 15px 0px 0px;
            box-shadow: -3px -2px 3px 0px gray;
            border: 10px;
        }

        .nav-tabs .nav-link:hover {
            background-color: #001f7f;
            color: white;
            border-radius: 15px 15px 0px 0px;
            box-shadow: -3px -2px 3px 0px gray;
            border: none;
        }

        .btn-submit {
            background-color: #001f7f;
            color: white;
            border-radius: 10px;
        }

        input[type="text"] {
            border: 2px solid #c6c5c7;
            border-radius: 10px;
            margin-bottom: 10px;
            height: 7vh;
            font-size: 20px;
        }

        input[type="email"] {
            border: 2px solid #c6c5c7;
            border-radius: 10px;
            margin-bottom: 10px;
            height: 7vh;
            font-size: 20px;
        }

        input[type="password"] {
            border: 2px solid #c6c5c7;
            border-radius: 10px;
            margin-bottom: 10px;
            height: 7vh;
            font-size: 20px;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>
    <div class="container-fluid ">
        <div class="row py-4 mb-5" style="background: #001f7f;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="col-sm-10 ms-auto ">
                    <a href="{{ asset('library') }}"><button class="btn btn-outline fs-4 text-light p-2"
                            style="background: #234890; border-radius: 10px;">Go To Library</button></a>
                </div>

                <div class="col-sm-1">
                    <a href="{{ asset('basicprofile') }}" style="text-decoration: none; color:white;">
                        <x-ionicon-person-circle-outline style=" width:5rem; margin-left:2px; background: none; " />
                    </a>
                    <div class="col-sm-8">
                        <a href="{{ asset('#') }}"> <button class="form-control text-center fw-bold" style="color:#001f7f;">
                           Logout
                       </button></a>
                   </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 nborder">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <h2 class="ms-5"><a class="nav-link active" href="{{ asset('basicprofile') }}">Basic
                                Profile</a></h2>
                    </li>
                    <li class="nav-item">
                        <h2 class="ms-5"><a class="nav-link " href="{{ asset('notification') }}">Notification</a></h2>
                    </li>
                    <li class="nav-item">
                        <h2 class="ms-5"><a class="nav-link" href="{{ asset('password') }}">Password</a></h2>
                    </li>
                </ul>

            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-10 ">
                <h1 class=" fw-bold text-dark mt-5 ms-4">Basic Profile</h1>
                <div class="card mt-3 border border-3 border-dark p-2">
                    <div class="card-body col-sm-12 fs-5 ">
                        {{-- form --}}
                        <form method="get" enctype="multipart/form-data">
                            <div class="form-group  col-sm-12 p-1">
                                <label for="name">Name</label>
                                <input type="text" class="form-control mt-2" id="name" name="name"
                                    placeholder="">
                            </div>
                            <div class="form-group col-sm-12 p-1">
                                <label for="email">Email</label>
                                <input type="email" class="form-control mt-2" id="email" name="email"
                                    placeholder="">
                            </div>
                            <div class="form-group col-sm-12 p-1">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" class="form-control mt-2" id="mobile" name="mobile"
                                    placeholder="">
                            </div>
                            <div class="form-group col-sm-12 p-1">
                                <label for="address">Address</label>
                                <input type="text" class="form-control mt-2" id="address" name="password"
                                    placeholder="">
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 d-flex p-1">
                                    <div class="form-group col-md-5 me-auto pe-2">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control mt-2" id="city" name="city"
                                            placeholder="">
                                    </div>
                                    <div class="form-group col-md-5 ms-auto ps-2">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control mt-2" id="state" name="state"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 d-flex  p-1">
                                    <div class="form-group col-md-5 me-auto pe-2">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control mt-2" id="country" name="country"
                                            placeholder="">
                                    </div>
                                    <div class="form-group  col-md-5 ms-auto ps-2">
                                        <label for="postal">Postal Code</label>
                                        <input type="text" class="form-control mt-2" id="postal"
                                            name="pcode" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <button type="submit"
                                    class="btn btn-submit fs-4 fw-bold col-sm-2 p-2 ms-auto mt-4 text-light">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <img src="{{ asset('image\Paper-Texture.png') }}" alt="img" class="img-fluid w-100 " height="20vh" />
        </div> --}}

    </div>

    <div class="container-fluid py-5 set_img "
        style="background-image: url('{{ asset('image/Paper-Texture.png') }}'); min-height: 20vh;" class="img-fluid">
    </div>





    <!-- Add your JS aos Animaruin here -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
