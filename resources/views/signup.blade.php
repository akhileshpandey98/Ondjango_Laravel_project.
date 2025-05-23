@extends('layouts.main_page')
@section('title', 'SignUp')
@section('main_page-section')

    <div class="container-fluid set_img"
        style="background-image: url('{{ asset('image/Signup_cover.png') }}'); height: 100vh;" class="img-fluid"
        data-aos="fade-right" data-aos-duration="2000">
    </div>
    {{-- form --}}
    <div class="container-fluid set_img"
        style="background-image: url('{{ asset('image/Signup_frame.png') }}'); min-height: 100vh;" class="img-fluid">
        <div class="row" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <form>
                    <h1 class="fw-bold display-5 text-light py-5">Sign Up for<br> <b class="display-2 fw-bold root"> Our
                            Courses</b></h1>

                    <div class="mb-3 col-sm-10">
                        <label for="name1" class="form-label fs-2 root">Name<sup>*</sup></label>
                        <input type="text" class="form-control text-light" name="name" id="name1"
                            style="background: none; height: 10vh;" />
                        {{-- error --}}
                        <span class="fs-4 ps-3" style="color:#b8b6b6">Ex. : Thomas Smith</span>
                    </div>

                    <div class="mb-3 col-sm-10">
                        <label for="mail" class="form-label fs-2 root">Email<sup>*</sup></label>
                        <input type="email" class="form-control text-light" name="email" id="mail"
                            style="background: none; height: 10vh; " />
                        {{-- error --}}
                        <span class="fs-4 ps-3" style="color:#b8b6b6">Ex. : abcd@domainname</span>
                    </div>

                    <div class="mb-5 col-sm-10">
                        <label for="mobno" class="form-label fs-2 root">Mobile No.<sup>*</sup></label>
                        <input type="text" class="form-control text-light" name="mob" id="mobno"
                            style="background: none; height: 10vh;" />
                        {{-- error --}}
                        <span class="fs-4 ps-3" style="color:#b8b6b6">Ex. : Only Numbers</span>
                    </div>
                    <div class="mb-3 col-sm-10">
                        <center><button class="btn btn-warning text-light btn-lg fw-bold col-sm-4  fs-2 mb-5 p-3 ">Sign
                                Up</button></center>

                    </div>



                </form>
            </div>
        </div>
    </div>
    {{-- end form --}}

    {{-- slider section --}}
    <div class="container-fluid">
        <div class="row" data-aos="fade-down" data-aos-duration="2000">
            <div class="col-sm-5">
                <p class="fw-bold display-4 text-center" style="color: #48454b; margin-top: 30%;">Success Jouneys of<br />
                    <b class="fw-bold display-1 root">Our Learners</b>
                </p>
            </div>
            <div class="col-sm-7 ">
                <div class="row p-3 mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide py-5"
                        style="height: 500px; box-shadow:inset 5px 3px 10px 3px grey; border-radius:20px; ">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="{{ asset('image\workers.png') }}" class="d-block p-3 w-100 img-fluid"
                                    alt="..." style="height: 400px; border-radius:40px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image\workers.png') }}" class="d-block w-100 p-3 img-fluid"
                                    alt="..." style="height: 400px; border-radius:40px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image\workers.png') }}" class="d-block p-3 w-100 img-fluid"
                                    alt="..." style="height: 400px; border-radius:40px;">
                            </div>
                        </div>
                        {{-- button --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- end slider --}}

            {{-- This course is designed For you if --}}
            <div class="row py-5" data-aos="fade-up" data-aos-duration="2000">
                {{-- div1 --}}
                <div class="col-sm-6 p-5 mt-5">
                    <div class="mb-5 d-flex">
                        <img src="{{ asset('image\Ellipse 19.png') }}" alt="img" height="100vh" width="100vh"
                            class="img-fluid me-3" />
                        <p class="fs-5 p-3 pt-2"> You want to challenge yourself and expand your horizons.</p>
                    </div>
                    <div class="mb-5 d-flex ">
                        <img src="{{ asset('image\Ellipse 19.png') }}" alt="img" height="100vh" width="100vh"
                            class="img-fluid me-3" />
                        <p class="fs-5 p-3 pt-2">You're seeking new opportunities or looking to
                            enhance your professional skills.</p>
                    </div>
                    <div class="mb-5 d-flex">
                        <img src="{{ asset('image\Ellipse 19.png') }}" alt="img" height="100vh" width="100vh"
                            class="img-fluid me-3" />
                        <p class="fs-5 p-3 pt-2"> You're aiming to fulfill academic requirements or pursue research in a
                            field where
                            the language is important.</p>

                    </div>
                </div>
                {{-- div2 --}}
                <div class="col-sm-6 pe-5 ">
                    <p class="fw-bold display-5 text-end" style="color:#48454b">This course is designed<br>
                        <b class="display-2 fw-bold " style="color:#4a6af1">For you if</b>
                    </p>

                    <button class="btn btn-primary fw-bold text-light col-sm-4 fs-2 p-2 mt-2 mb-3"
                        style="margin-left:60%; border-radius: 10px; background: #4a6af0;">Join Us</button>
                    <div class="mb-5 d-flex">
                        <img src="{{ asset('image\Ellipse 19.png') }}" alt="img" height="100vh" width="100vh"
                            class="img-fluid me-3" />
                        <p class="fs-5 p-3 pt-2"> You want to connect with friends, family, or a
                            community that speaks the language.</p>
                    </div>
                    <div class="mb-5 pe-5 d-flex">
                        <img src="{{ asset('image\Ellipse 19.png') }}" alt="img" height="100vh" width="100vh"
                            class="img-fluid me-3 " />
                        <p class="fs-5 p-3 pt-2">You want to connect with friends, family, or a
                            community that speaks the language.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- end container --}}

    {{-- start Desire to Learn --}}

    <div class="container-fluid py-5 set_img"
        style="background-image: url('{{ asset('image/bgpic.png') }}'); min-height: 100vh;" class="img-fluid">
        <div class="py-5" data-aos="fade-up" data-aos-duration="2000">
            <p class="display-5 fw-bold  me-5" style="color:#48454b; margin-left: 30%;">What drives your <br />
                <b class="display-2  text-danger fw-bold ms-5" style="color:red;">Desire to Learn?</b>
            </p>
        </div>


        <div class="row" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-sm-6 fs-5 ps-5 py-5">
                <ul class=" ">
                    <li>Improves memory, problem-solving skills, and brain flexibility.</li>
                    <li>Deeper understanding of other cultures, traditions, and histories.</li>
                    <li> Makes travel experiences more enriching and immersive.</li>
                    <li> Boosts confidence and personal achievement.</li>
                    <li> Strengthen bonds with family members, friends, or partners who speak it.</li>
                    <li> Fulfilling hobby that provides lifelong learning opportunities.</li>

                </ul>
                {{-- img --}}
                <div class="mb-5 ">
                    <img src="{{ asset('image\proFrame1.png') }}" alt="img" height="100vh" class="img-fluid  " />

                </div>

            </div>
            <div class="col-sm-6">
                {{-- img --}}
                <div class="mb-5 ">
                    <img src="{{ asset('image\proFrame2.png') }}" alt="img" height="100vh" class="img-fluid " />
                </div>

                <div class="fs-5" style="">
                    <ul class="">
                        <li>Bilingualism opens doors to job opportunities in global companies and international markets.
                        </li>
                        <li>Facilitate communication with international colleagues, clients, or collaborators.</li>
                        <li>For content creators, speaking multiple languages helps expand their audience and increases
                            viewership.</li>
                        <li>Can lead to higher salaries or business revenue by accessing untapped markets.</li>
                        <li>Open up freelance opportunities like translation, teaching, or content creation for
                            different
                            linguistic markets.</li>
                        <ul>

                        </ul>
                    </ul>

                </div>
            </div>
        </div>
        {{-- end container-fluid --}}
    </div>

    {{-- start Founder Message --}}

    <div class="container-fluid">
        <div class="row" data-aos="fade-down-right" data-aos-duration="2000">
            <div class="col-sm-5">
                {{-- img --}}
                <div class="py-5">
                    <img src="{{ asset('image\Frame 90.png') }}" alt="img" height="100vh" class="img-fluid " />
                </div>
            </div>
            <div class="col-sm-7">

                <div class="py-5">
                    <p class="display-5 fw-bold " style="color:#48454b; margin-left: 40%;">Founder <br />
                        <b class="display-2 fw-bold ms-5 root">Message</b>
                    </p>
                </div>
                <p class="pe-3">
                    Lorem ipsum dolor sit amet. Eum doloribus vero cum harum eaque qui odio
                    eius ut sint praesentium ut dolore architecto. In facere eius est cumque velit
                    a modi vero eos rerum odit.
                    Vel alias unde qui voluptate quis ut consequuntur placeat. 33 voluptas
                    maxime eos rerum fuga rem fugit numquam a pariatur sunt. Aut saepe
                    consequatur non corporis veritatis ut mollitia incidunt vel laboriosam quod
                    vel voluptates rerum non officiis galisum.
                    Lorem ipsum dolor sit amet. Eum doloribus vero cum harum eaque qui odio
                    eius ut sint praesentium ut dolore architecto. In facere eius est cumque velit
                    a modi vero eos rerum odit.
                </p>
            </div>
        </div>
        {{-- end --}}
    </div>


    <div class="container-fluid py-5 set_img"
        style="background-image: url('{{ asset('image/Rectangle 194.png') }}'); min-height: 100vh;" class="img-fluid">
        <div class="row" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="col-sm-6 ps-3">
                <div class="py-5 ps-5">
                    <p class="display-5 fw-bold " style="color:#48454b;">Individualized <br />
                        <b class="display-2 fw-bold ms-5 root" style="color:#6e6beb;">Study Routine</b>
                    </p>

                    <p class="ps-3">
                        Lorem ipsum dolor sit amet. Eum doloribus vero cum harum eaque qui odio eius ut sint praesentium
                        ut
                        dolore architecto. In facere eius est cumque velit a modi vero eos rerum odit.
                    </p>
                </div>
            </div>


            <div class="col-sm-6">
                {{-- img --}}
                <div class="">
                    <img src="{{ asset('image\calendar-pencil.png') }}" alt="img" height="100vh"
                        class="img-fluid " />

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" data-aos="fade-right" data-aos-duration="2000">
            <p class="display-2 ps-5 fw-bold text-dark">Subscribe <br />
            <b class="display-5 fw-bold ms-5 root">to our newsletter!</b>
            </p>
        </div>
        <div class="row justify-content-center py-4" data-aos="zoom-in-right" data-aos-duration="2000">
            <dic class="col-sm-7">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id=""
                            aria-describedby="helpId" placeholder="Type Your Name"
                            style="background:#ffe8bf;color:#a39584; height: 10vh;" />
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" name="name" id=""
                            aria-describedby="helpId" placeholder="Type Your Email"
                            style="background:#ffe8bf;color:#a39584; height: 10vh;" />
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline fw-bold text-light col-sm-2 fs-2 p-2 mt-2 mb-3"
                            style="margin-left:80%; border-radius: 20px; background:#ffa300 ;">Join Us</button>
                    </div>
                </form>
            </dic>
        </div>
    </div>
@endsection
