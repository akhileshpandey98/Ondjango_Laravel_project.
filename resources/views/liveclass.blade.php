@extends('layouts.main_page')
@section('title', 'liveclass')
@section('main_page-section')
    {{-- img  --}}
    <div class="container-fluid set_img"
        style="background-image: url('{{ asset('image/live_Coursepage.png') }}'); min-height: 100vh;" class="img-fluid "
        data-aos="fade-down" data-aos-duration="2000">
    </div>

    {{-- img --}}
    <div class="container-fluid set_img"
        style="background-image: url('{{ asset('image/live_connecting-dots.png') }}'); min-height: 100vh;" class="img-fluid">
        <div class="row">
            <div class="col-sm-10 " data-aos="fade-right" data-aos-duration="2000">
                <p class="fs-1 fw-bold text-center py-5">What we
                    <b class="fw-bold display-2 d-flex-column" style="color:#0a7393;"> Provide</b><br />
                    {{-- <img src="{{ asset('image\live5.png') }}" class="bg-dark img-fluid ms-5"
               height="5vh" width="250vh" alt="..." style=" color:#0a7393;"> --}}
                </p>
            </div>

            {{-- start card --}}
            <div class="row justift-content-center mb-4 " data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="col-sm-4 ">
                    {{-- card1 --}}
                    <div class="card col-sm-9 text-dark m-auto mt-3"
                        style="border-radius: 20px; background: #f5bc57; min-height:50vh;">
                        <img src="{{ asset('image\lonline-learning1.png') }}" class="p-3 bg-light m-3 img-fluid"
                            height="80vh" width="80vh" alt="Sample Image" style="border-radius: 20px;">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Expert Teacher</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et recusandae soluta non delectus autem est
                                fugit
                                quia..</p>
                            <a href="#" class="fs-3" style="text-decoration: none; color: black;">
                                <p class="card-text mb-4">Learn More <span><x-ionicon-arrow-forward-outline
                                            style="height:5vh; width:3vh; margin-left:2px; background: none; color:black;" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    {{-- card2 --}}
                    <div class="card col-sm-9 text-dark m-auto mt-3"
                        style="border-radius: 20px; background: #f5bc57; min-height:50vh;">
                        <img src="{{ asset('image\lwebinar2.png') }}" class="p-3 bg-light m-3 img-fluid" height="80vh"
                            width="80vh" alt="Sample Image" style="border-radius: 20px;">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Live Course</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et recusandae soluta non delectus autem est
                                fugit
                                quia..</p>
                            <a href="#" class="fs-3" style="text-decoration: none; color:rgb(47, 46, 46);">
                                <p class="card-text mb-4">Learn More <span><x-ionicon-arrow-forward-outline
                                            style="height:5vh; width:3vh; margin-left:2px; background: none; color:rgb(47, 46, 46);" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    {{-- card3 --}}
                    <div class="card col-sm-9 text-dark m-auto mt-3"
                        style="border-radius: 20px; background: #f5bc57; min-height:50vh;">
                        <img src="{{ asset('image\lonline-learning1.png') }}" class="p-3 bg-light m-3 img-fluid"
                            height="80vh" width="80vh" alt="Sample Image" style="border-radius: 20px;">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Online Classes</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet. Et recusandae soluta non delectus autem est
                                fugit
                                quia..</p>
                            <a href="#" class="fs-3" style="text-decoration: none; color: rgb(47, 46, 46);">
                                <p class="card-text mb-4">Learn More <span><x-ionicon-arrow-forward-outline
                                            style="height:5vh; width:3vh; margin-left:2px; background: none; color:black;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end container-fluid --}}
    </div>

    {{-- Effective method for learning  --}}

    <div class="container-fluid bg-primary set_img"
        style="background-image: url('{{ asset('image/live6.png') }}'); min-height: 100vh;" class="img-fluid"
        data-aos="fade-down" data-aos-duration="2000">

        <div class="row" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-sm-12 text-light py-5">
                <p class="fw-bold fs-1 text-center"> Find the most<br />
                    <b class="fw-bold display-4 ">Effective method for learning</b>
                </p>
                {{-- <div class=" col-sm-3 " style="margin-left: 14%;"> --}}
                {{-- <img src="{{ asset('image\live5.png') }}" class=" img-fluid ms-5 " height="5vh" alt="..." /> --}}
                {{-- </div> --}}
            </div>
        </div>

        <div class="row" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine"
            data-aos-duration="2000">
            <div class="col-sm-6 ">
                <div class="ps-5">
                    <p class="fs-2 ps-2" style="text-align:justify mb-5">
                        Our carefully selected teachers create a relaxed environment for every practice session, ensuring
                        you feel safe to make mistakes and grow.
                    </p>

                    <button class="btn btn-warning col-sm-5 fw-bold fs-4 mt-5" style="">GET STARTED</button>
                    {{-- style="margin-bottom: 130px;">GETSTARTED</button> --}}
                </div>
            </div>
            <div class="col-sm-6 set_img tr">

                <img src="{{ asset('image\live_star.png') }}" alt="img" class="img-fluid w-100"
                    style="transform: translateY(-60px);" />


            </div>
        </div>
        {{-- end cont.. --}}
    </div>

    {{-- Lessons personalized --}}
    <div class="container-fluid">
        <div class="row text-dark ps-5 py-5" data-aos="fade-right" data-aos-duration="2000">
            <p class="fw-bold fs-2 ps-5" style="color:#2f4dcf;"> Lessons personalized for your<br />
                <b class="fw-bold display-5 d-flex text-dark">Daily Routine</b>
                <img src="{{ asset('image\live_bluebg.png') }}" class=" img-fluid " min-height="5vh" alt="..." />
            </p>
        </div>
        {{-- image --}}
        <div class="row p-3" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="col-sm-5">
                {{-- <div class="ps-5">
                    <img src="{{ asset('image\live4.png') }}" alt="img" min-height="100vh"
                        class="img-fluid w-100" />
                </div> --}}
                <div class=" mb-5 ps-5">
                    <img src="{{ asset('image\live3.png') }}" alt="img" height="100vh" class="img-fluid w-100" />
                </div>


            </div>



            <div class="col-sm-7">
                <p class="">
                    Our engaging lessons are designed to fit seamlessly into even the busiest schedules, making it easy to
                    incorporate learning into your day-to-day life. With a personalized Study Plan, you can set long-term
                    goals, while progress checkpoints help you track your achievements and see how much you've grown.
                </p>

            </div>
        </div>

        {{-- Boost your confidence  --}}
        <div class="row p-3" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="col-sm-7">
                <p class="p-3">
                    Learn directly from native speakers who are ready to share pronunciation tips and grammar insights
                    to
                    enhance your learning. With their guidance, you’ll quickly gain the confidence to speak fluently and
                    apply your skills to build real-life connections.
                </p>

            </div>

            <div class="col-sm-5 mt-5" style="transform: translateY(-20%)">
                <p class="fw-bold fs-2 ps-5 text-end" style="color:#2f4dcf;"> Boost your confidence in<br />
                    <b class="fw-bold display-5 text-dark">Speaking</b>
                    <img src="{{ asset('image\live_bluebg.png') }}" class=" img-fluid  " min-height="5vh"
                        alt="..." />
                </p>
                <div class="col-sm-9 m-auto">
                <img src="{{ asset('image\live2.png') }}" alt="img" min-height="100vh" class="img-fluid img-top" />
                </div>
            </div>
        </div>
        {{-- Next Level --}}
        <div class="row p-2" data-aos="fade-down-right" data-aos-duration="2000">
            <div class=" text-dark " data-aos="fade-right" data-aos-duration="2000">
                <p class="fw-bold fs-2 ps-5" style="color:#2f4dcf;"> Take your speaking to the<br />
                    <b class="fw-bold display-5 d-flex text-dark">Next Level</b>
                    <img src="{{ asset('image\live_bluebg.png') }}" class=" img-fluid " min-height="5vh"
                        alt="..." />
                </p>
            </div>
            <div class="col-sm-5">
                <div class="col-sm-9 m-auto">

                    <img src="{{ asset('image\live1.png') }}" alt="img" min-height="100vh"
                        class="img-fluid w-100" />

                </div>
            </div>
            <div class="col-sm-7 p-5">
                <p class=" fs-4">
                    Unlock your voice's potential with live teacher interactions, allowing you to practice real-life
                    scenarios. Strengthen your weaknesses in a stress-free setting and gain fluency in everyday
                    conversations.
                </p>
            </div>
        </div>

    </div>

    {{-- Individual Classes --}}
    <div class="container-fluid" style="background:#fadf8d">
        <div class="row py-5 p-4 justift-content-center" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="col-sm-6 py-5">
                <div class="card col-sm-7 m-4 m-auto pe-4  card1">
                    <div class="  ps-2">
                        <img src="{{ asset('image\liveclass_bg.png') }}" alt="img" min-height="100vh"
                            width="100%" class="img-fluid  m-3 py-2" />
                    </div>
                </div>

            </div>
            {{-- div2 --}}
            <div class="col-sm-6">
                {{-- <div class=" text-dark  py-5" data-aos="fade-right" data-aos-duration="2000"> --}}
                <p class="fw-bold fs-2 ">
                    <b class="fw-bold display-5 d-flex " style="color:#2f4dcf;">Individual Classes</b>
                    <img src="{{ asset('image\live_bluebg.png') }}" class=" img-fluid " height="5vh"
                        alt="..." />
                </p>
                {{-- </div> --}}

                <div class="">
                    <p class="display-5 mb-2 ">
                        Only you, the educator, and a thoughtfully structured course
                    </p>

                    <p class="fs-4 py-4">
                        Individual classes offer more than just an exclusive experience; they are a sequence of focused
                        sessions centered on your progress. There’s truly nothing else like it.
                    </p>

                    <button class="btn btn-outline col-sm-5 fw-bold text-light fs-4 mt-5" style="background:#2f4dcf;">GET
                        STARTED</button>


                </div>
            </div>

        </div>

        {{-- Group Classes --}}
        <div class="row p-3" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-sm-7">

                <p class="fw-bold fs-2 ps-5">
                    <b class="fw-bold display-5 d-flex " style="color:#2f4dcf;">Group Classes</b>
                    <img src="{{ asset('image\live_bluebg.png') }}" class=" img-fluid " height="5vh"
                        alt="" />
                </p>


                <div class="ps-5">
                    <p class="display-5 mb-5">
                        Practice alongside individuals who are at your level.
                    </p>

                    <p class="fs-4 mb-2">
                        In group classes, you can have genuine discussions with people eager to explore topics that
                        fascinate you.
                    </p>

                    <button class="btn btn-outline col-sm-5 fw-bold text-light fs-4 mt-3 mb-5"
                        style="background:#2f4dcf;">GET
                        STARTED</button>
                </div>

            </div>
            {{-- live closeup --}}
            <div class="col-sm-5" data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="card col-sm-8 m-4 m-auto pe-4 card2 mb-5">
                    <div class="  ps-2">
                        <img src="{{ asset('image\live-closeup.png') }}" alt="img" min-height="100vh"
                            width="100%" class="img-fluid  m-3  pe-2 py-2" />
                    </div>
                </div>
            </div>
        </div>

        {{-- end container-fluid --}}
    </div>

    {{-- Tailored to your routine --}}
    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/login_modal.png') }}');"
        class="img-fluid ">
        <div class="row justift-content-center ms-5" data-aos="fade-right" data-aos-duration="2000">
            <div class="col-sm-8">
                <p class="display-5 text-end me-5 ">Pick the Plan</p>
            </div>
            <div class="col-sm-9 m-auto ">
                <b class="fw-bold display-3 text-center ps-5" style="color:#0a7493;">Tailored to your routine</b>
            </div>


        </div>
        {{-- card1 --}}
        <div class="row justift-content-center p-5" data-aos="fade-right" data-aos-offset="200"
            data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="col-sm-6">
                <div class="col-sm-7 m-auto py-5 mt-3">
                    <div class="card text-light" style="height: 82vh; border-radius: 22px; border:2px solid #5f7089">
                        <div class="card-title">
                            <p class="fw-bold fs-1 text-center p-2 mb-3" style="background:#5f7089; border-radius: 20px;">
                                Individual Classes</p>
                            <p class="text-dark p-2 text-center mb-2">
                                Ideal for those aiming to progress quickly with a customized approach.
                            </p>
                            <div class="text-dark fs-4" type="none">
                                <p class="text-center">Loram ipsam</p>
                                <p class="text-center" style="background:#d9d9d8;">Loram ipsam</p>
                                <p class="text-center">Loram ipsam</p>
                                <p class="text-center" style="background:#d9d9d8;">Loram ipsam</p>
                                <p class="text-center">Loram ipsam</p>

                            </div>

                            <p class=" fs-4 text-center p-3"
                                style="background:#5f7089; border-radius: 20px; box-shadow: 1px 3px 8px 0px gray;">I want
                                individual class
                                <br />
                                <b class="fs-1 fw-bold">Click Here</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card2 --}}
            <div class="col-sm-6">
                <div class="col-sm-7 m-auto py-5 mt-3">
                    <div class="card text-light" style="height: 82vh; border-radius: 22px; border:2px solid #0a7493">
                        <div class="card-title">
                            <p class="fw-bold fs-1 text-center p-2 mb-3" style="background:#0a7493; border-radius: 20px;">
                                Group Classes</p>
                            <p class="text-dark p-2 text-center mb-2">
                                For those looking to practice with participants of comparable expertise
                            </p>
                            <div class="text-dark fs-4 " type="none">
                                <p class="text-center">Loram ipsam</p>
                                <p class="text-center" style="background:#d9d9d8;">Loram ipsam</p>
                                <p class="text-center">Loram ipsam</p>
                                <p class="text-center" style="background:#d9d9d8;">Loram ipsam</p>
                                <p class="text-center">Loram ipsam</p>

                            </div>

                            <p class=" fs-4 text-center p-3"
                                style="background:#0a7493; border-radius: 20px; box-shadow: 1px 3px 8px 0px gray;">I want
                                individual class
                                <br />
                                <b class="fs-1 fw-bold">Click Here</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}
    </div>








@endsection
