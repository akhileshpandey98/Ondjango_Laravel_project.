@extends('layouts.main_page')
@section('title', 'Laxicon')
@section('main_page-section')

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/laxicon_bg.png') }}'); ">
        <div class="row py-5">
            <div class="col-sm-12 py-5">
                <p class="fw-bold display-2 text-light text-center">
                    Discover, Master, and <br />
                    Retain new languages
                </p>
                {{-- bitton --}}
                <div class="row justify-content-center p-5">
                    <button class="btn btn-light fs-3 btn-lg fw-bold col-sm-2  text-danger m-auto">Join Now</button>
                </div>
            </div>
        </div>

        <div class="row set_img set_img" style="background-image: url('{{ asset('image/laxi_girl.png') }}');"
            class="img-fluid">
            <div class="col-sm-12 py-5">
                <p class="fw-bold text-center display-4 text-danger mt-5">
                    Speak with Confidence, Pronounce with Precision<br />
                    Lexicon-Your guide to flawless pronunciation
                </p>
                <p class=" text-center fs-2 fw-bold mt-5 text-dark p-3">
                    Lexicon is your ultimate platform to master the art of pronunciation. Whether you're a beginner or
                    looking to refine your language skills, our interactive tools and expert-guided practice sessions help
                    you speak with clarity and confidence.
                </p>
            </div>
        </div>

        {{-- middle --}}
        <div class="row">
            <p class="fw-bold text-center display-1 text-light ">
                How Lexicon Works ?
            <div class="col-sm-3 m-auto">
                <img src="{{ 'image/laxi_Underline.png' }}" alt="img" class="img-fluid pe-5" height="20vh"
                    min-width="70vh" />
            </div>
            </p>
        </div>

        {{-- row1 --}}
        <div class="row p-4">
            <div class="col-sm-6 p-5">
                <img src="{{ 'image/laxi_rocket.png' }}" alt="img" class="img-fluid  w-100" />
            </div>
            {{-- row2 --}}
            <div class="col-sm-6">
                {{-- card1 --}}
                <div class="col-sm-7 mt-5">
                    <img src="{{ 'image/lxi_cont1.png' }}" alt="img" class="img-fluid  w-100" />
                </div>

                {{-- card2 --}}
                <div class="col-sm-9  mt-3 d-flex m-auto">

                    <div class=" col-sm-4 ms-auto">
                        <img src="{{ 'image/laxi-Arrow_right.png' }}" alt="img" class="img-fluid ps-5 w-100"
                            height="20vh" min-width="60vh" />
                    </div>
                    <div class=" col-sm-10 ms-auto">
                        <img src="{{ 'image/lxi_cont2.png' }}" alt="img" class="img-fluid w-100 " />
                    </div>
                </div>

                {{-- card3 --}}
                <div class="col-sm-9 mt-3 d-flex ">
                    <div class=" col-sm-10">
                        <img src="{{ 'image/lxi_cont3.png' }}" alt="img" class="img-fluid w-100 " />
                    </div>
                    <div class=" col-sm-4 ">
                        <img src="{{ 'image/laxi-Arrow_left.png' }}" alt="img" class="img-fluid pe-5 w-100"
                            height="20vh" min-width="60vh" />
                    </div>
                </div>
            </div>
        </div>


        {{-- Schedule your studies --}}

        <div class="row set_img set_img" style="background-image: url('{{ asset('image/laxi_foot.png') }}');"
            class="img-fluid w-100 mb-5">
            {{-- heading --}}
            <div class="row py-5">
                <div class="col-sm-7 py-5">
                    <p class="display-2 fw-bold text-light p-4">
                        Schedule your studies</br>
                        into your daily life
                        {{-- <p class="col-sm-4 ms-auto">
                            <img src="{{ 'image/laxi_Under.png' }}" alt="img" class="img-fluid w-100 "
                            height="10vh" min-width="80vh" />
                        </p> --}}
                    </p>

                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-sm-6 fs-2  text-light ps-4 mb-3">
                    <ul>
                        <li class="fw-bold">Learn on your own schedule</li>
                        <p class="fs-5 mb-5">Always choose the study mode that aligns with the time you have each day.</p>

                        <li class="fw-bold">Work on improving your reading and comprehension skills.</li>
                        <p class="fs-5 mb-5">Boost your listening abilities with focused practice.</p>

                        <li class="fw-bold">Enhance your listening abilities through practice.</li>
                        <p class="fs-5 mb-5">Play the phrases from each card, with native speaker audio.</p>
                    </ul>
                </div>

                <div class="col-sm-5 fs-2 text-light ps-1">
                    <ul>
                        <li class="fw-bold">Make your studies fit your personal preferences.</li>
                        <p class="fs-5 mb-5">Hide the text, set the audio speed, add animations, enable dark mode, and more.
                        </p>

                        <li class="fw-bold">Develop the ability to think in the language you're learning.</li>
                        <p class="fs-5 mb-5">Follow a learning path that helps you acquire languages faster.</p>
                    </ul>

                </div>
            </div>





        </div>

        {{-- end-container --}}
    </div>




@endsection
