<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- logo --}}
    <div class="container">
        <a class="navbar-brand" href="#"> <img src="image\logo.png" class="img-cover  d-block" alt="logo"
                height="70vh;" width="100%;" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item "> <a class="nav-link active " href="{{ asset('/') }}">HOME</a> </li>
                <li class="nav-item "> <a class="nav-link active " href="{{ asset('#teacher') }}">TEACHERS</a> </li>
                <li class="nav-item dropdown text-dark">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        FEATURES+
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item fw-bold" href="{{ asset('course') }}">COURSE</a></li>
                        <li><a class="dropdown-item fw-bold" href="{{ asset('laxicon') }}">LEXICON</a></li>
                        <li><a class="dropdown-item fw-bold" href="{{ asset('liveclass') }}">LIVE CLASSES</a></li>
                    </ul>
                </li>
                <li class="nav-item "> <a class="nav-link active " href="{{ asset('blog') }}">BLOG</a> </li>
                <li class="nav-item "> <a class="nav-link active " href="{{ asset('about') }}">ABOUT US</a> </li>
                <li class="nav-item "> <a class="nav-link active " href="{{ asset('contact') }}">CONTACT</a> </li>
            </ul>
            <!-- Button trigger modal -->
            <button class="btn btn-warning fw-bold " data-bs-toggle="modal" data-bs-target="#welcomeModal"
                type="button">Log in</button>
        </div>
    </div>
</nav>


{{-- Login Modal Form --}}
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="welcomeModal">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">

                <!-- Modal Body -->
                <div class="modal-body set_img1" style="background-image: url('{{ asset('image/login_modal.png') }}');"
                    class="img-contain ">
                    <h4 class="modal-title display-4 text-center fw-bold m-auto text-warning">Welcome Back!</h4>
                    <p class="fs-2">Join my course and build your language proficiency step by step through engaging,
                        real-world
                        lessons!</p>
                    <div><img src="image\line.png" alt="line" height="5px" width="100%"></div>
                    <div class="row ">
                        <div class="col">
                            <h5 class="fw-bold fs-3 text-dark mt-2">Existing account?</h5>
                            <a href="{{ asset('login') }}"><button
                                    class="btn btn-warning btn-lg col-sm-4 fw-bold text-light mt-3"
                                    data-bs-toggle="modal" data-bs-target="#LoginModal" type="button">
                                    LogIn</button></a>
                        </div>
                        <div class="col">
                            <h5 class="fw-bold fs-3 text-dark mt-2">No account yet?</h5>
                            <a href="{{ asset('signup') }}"> <button
                                    class="btn btn-warning btn-lg col-sm-4 fw-bold text-light mt-3">Sign Up</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
