<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- use title page --}}
    <title>@yield('notification')</title>
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
            border: none;
        }


        .nav-tabs .nav-link:hover {
            background-color: #001f7f;
            color: white;
            border-radius: 15px 15px 0px 0px;
            box-shadow: -3px -2px 3px 0px gray;
            border: none;
            transition: 1s;

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

        .form-check-input:checked {
            background-color: #001f7f;
            /* Change this to your desired color */
            border-color: black;
            /* Change this to your desired color */
        }
        p{
            color: #a9a9a9;
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
                        <h2 class="ms-5"><a class="nav-link " href="{{ asset('basicprofile') }}">Basic
                                Profile</a></h2>
                    </li>
                    <li class="nav-item">
                        <h2 class="ms-5"><a class="nav-link active" href="{{ asset('notification') }}">Notification</a></h2>
                    </li>
                    <li class="nav-item">
                        <h2 class="ms-5"><a class="nav-link" href="{{ asset('password') }}">Password</a></h2>
                    </li>
                </ul>

            </div>
        </div>
        {{-- notification --}}
        <div class="row justify-content-center mb-5">
            <div class="col-sm-10 ">
                <h1 class=" fw-bold text-dark mt-5 ms-4">Notification</h1>
                <div class="card mt-3 border border-3 border-dark p-4">

                    <div class="form-check form-switch mt-2 fs-4">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Recommended Courses</label>
                        <p class="fs-5">Notify me of courses I might like based on what I watch.</p>
                    </div>
                    <div class="form-check form-switch mt-3 fs-4">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Activity on my comments</label>
                        <p class="fs-5">Notify me about activity on my comments on others’ courses.</p>
                    </div>
                    <div class="form-check form-switch mt-3 fs-4">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Replies to my comments</label>
                        <p class="fs-5">Notify me about activity on my comments on others’ courses.</p>
                    </div>
                    <div class="form-check form-switch mt-3 fs-4">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Recommended Courses</label>
                        <p class="fs-5">Notify me of courses I might like based on what I watch</p>
                    </div>





                </div>
            </div>
        </div>




        {{-- end-container --}}
    </div>


    {{-- foot --}}
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
