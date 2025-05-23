@extends('layouts.main_page')
{{-- your tittle --}}
@section('title', 'HomePage')

{{-- your body section --}}
@section('main_page-section')

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/home slider .jpg') }}');"
        class="img-fluid">
        <div class="row ">
            {{-- <img src="{{ asset('image\home slider .jpg') }}" alt="Girl Foot" class="img-fluid" height="500vh" width="100%"> --}}

        </div>
    </div>


    {{-- Our Teacher Team --}}
    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/colorful_bg.png') }}');" id="teacher">

        <div class="row">
            <p class="fw-bold display-3 mt-5 text-light text-center ">Our Teacher Team</p>
        </div>

        <div class="row p-2 pb-5" data-aos="fade-right"  data-aos-duration="2000">
            {{-- card1 --}}
            <div class="col-sm-4 mt-3">
                <div class="card  p-3" style="width:100%; min-height: 450px;">
                    <img src="{{ asset('image\boy1.png') }}" alt="boy_img" class="img-fluid mt-2 rounded"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold fs-4">JOHN SMITH</h5>
                        <a href="#" style="text-decoration: none; color: black;">
                            <p class="card-text ">Learn More <span><x-ionicon-arrow-forward-outline
                                        style="height:5vh; width:3vh; margin-left:2px; background: none; color:black;" />
                        </a></span>
                        </p>
                    </div>
                </div>
            </div>

            {{-- card2 --}}
            <div class="col-sm-4 mt-3">
                <div class="card  p-3" style="width:100%; min-height: 450px;">
                    <img src="{{ asset('image\boy2.png') }}" alt="boy_img" class="img-fluid mt-2 rounded"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold fs-4">JOHN SMITH</h5>
                        <a href="#" style="text-decoration: none; color: black;">
                            <p class="card-text ">Learn More <span><x-ionicon-arrow-forward-outline
                                        style="height:5vh; width:3vh; margin-left:2px; background: none; color:black;" />
                        </a></span>
                        </p>
                    </div>
                </div>
            </div>

            {{-- card3 --}}
            <div class="col-sm-4 mt-3">
                <div class="card  p-3" style="width:100%; min-height: 450px;">
                    <img src="{{ asset('image\boy3.png') }}" alt="boy_img" height="200px" class="img-fluid mt-2 rounded"
                        class="card-img-top" alt="..." style="height:475px;">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold fs-4">JOHN SMITH</h5>
                        <a href="#" style="text-decoration: none; color: black;">
                            <p class="card-text ">Learn More <span><x-ionicon-arrow-forward-outline
                                        style="height:5vh; width:3vh; margin-left:2px; background: none; color:black;" />
                        </a></span>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        {{-- end container --}}
    </div>

    {{-- Specialized Learning --}}
    <div class="container-fluid set_img1" style="background-image: url('{{ asset('image/Texture.png') }}');">

        <div class="row">
            <div data-aos="fade-down"  data-aos-duration="2000">
            <h1 class="text-center py-3 fw-bold">Unlock Your Potential with<br /> our Specialized Learning Features</h1>
            <div>
        </div>
        {{-- div1 --}}
        <div class="row justify-content-center">
            <div class="col-sm-5" >
                <img src="{{ asset('image\girl_laptop.png') }}" alt="Girl Foot" class="img-fluid" height="100vh"
                    width="100%">
            </div>

            {{-- div2 --}}
            <div class="col-sm-6 ">
                <h1 class="text-danger fw-bold " style="margin-top: 140px;">On-Demand <br />Learning Courses</h1>
                <p>Transform your language skills with our on demand courses, tailored for every level from beginner to
                    advanced. Learn at your own pace with interactive lessons, real-world practice, and expert guidance.
                    Learn at your own pace with interactive lessons,Start mastering a new language today, anytime, anywhere!
                </p>
                <a href="#" style="text-decoration: none; color:red;">
                    <p class="card-text text-danger fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:red" />
                </a></span>
                </p>

            </div>
        </div>

        {{-- div3 --}}
        <div class="row justify-content-center" data-aos="fade-down-right"  data-aos-duration="2000">
            <div class="col-sm-6 mt-6" style="transform:translatey(50px)">
                <h1 class="text-danger fw-bold mt-5">Master Pronunciation<br /> with Ease</h1>
                <p>Perfect your pronunciation with our specialized courses designed for language learners. Focus on accent
                    reduction, intonation, and clarity with expert guidance. Practice at your own pace and gain the
                    confidence to speak fluently and naturally.
                </p>
                <a href="#" style="text-decoration: none; color:red;">
                    <p class="card-text  fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:red;" />
                </a></span>
                </p>

            </div>

            {{-- div4 --}}
            <div class="col-sm-5">
                <img src="{{ asset('image\boy_mobile3.png') }}" alt="Girl Foot" class="img-fluid mt-5" height="100vh"
                    width="100%">
            </div>

        </div>



         {{-- div5 --}}
         <div class="row justify-content-center"  data-aos="fade-up-right"  data-aos-duration="2000">
            <div class="col-sm-5 mt-3">
                <img src="{{ asset('image\girl_tab.png') }}" alt="Girl Foot" class="img-fluid" height="100vh"
                    width="100%">
            </div>

            {{-- div6 --}}
            <div class="col-sm-6 mt-5">
                <h1 class=" fw-bold mt-5" style="margin-top: 70px; color: rgb(16, 16, 184);">Join Live <br/>Classes</h1>
                <p>Transform your language skills with our on demand courses, tailored for every level from beginner to
                    advanced. Learn at your own pace with interactive lessons, real-world practice, and expert guidance.
                    Learn at your own pace with interactive lessons,Start mastering a new language today, anytime, anywhere!
                </p>
                <a href="#" style="text-decoration: none; color:blue;">
                    <p class="card-text text-danger fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:blue" />
                </a></span>
                </p>

            </div>
        </div>

        {{-- girl footer_templete --}}
         <div class="row justify-content-center"  data-aos="fade-up-down"  data-aos-duration="2000">
        <div class="col-sm-10  girlfoot">
            <img src="image/girlfoot.png" alt="img" class="img-fluid w-100" />
            <div class="text-overlay ms-5 col-sm-5 ">
                <b class="fw-bold display-5 text-dark">Lorem Ipsam Dolor</b>
                <p class="fs-5">Lorem ipsum dolor sit amet. Et sint dolorem vel
                    pariatur galisum et laboriosam nobis qui rerum
                    delectus sed nobis maiores.</p>
                <button class="btn btn-dark fw-bold p-1 fs-4">APPLY NOW</button>
            </div>
        </div>
    </div>

        {{-- container --}}
    </div>





@endsection
