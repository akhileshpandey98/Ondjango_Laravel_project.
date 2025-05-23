@extends('layouts.main_page')
@section('title', 'blog')
@section('main_page-section')

    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/Blog slider1.png') }}'); "
        class="img-fluid" data-aos="fade-down" data-aos-duration="2000">
    </div>

    <div class="container-fluid">
        <div class="row py-5 p-3">
            {{-- .img1 --}}
            <div class="col-sm-4" data-aos="flip-left" data-aos-duration="2000">
                <div class="card" style="border-radius:20px; border:none;">
                    <img src="{{ asset('image\workers.png') }}" class="d-block p-3 w-100 img-fluid" alt="..."
                        style="height: 350px; border-radius:20px;">
                </div>

                {{-- img2 --}}
                <div class="card mt-5" style="border-radius:20px; border:none;">
                    <img src="{{ asset('image\blog_friend.png') }}" class="d-block p-3 w-100 img-fluid" alt="..."
                        style="height: 350px; border-radius:20px;">
                </div>

                {{-- img3 --}}
                <div class="card mt-5" style="border-radius:20px; border:none;">
                    <img src="{{ asset('image\blog_study.png') }}" class="d-block p-3 w-100 img-fluid" alt="..."
                        style="height: 350px; border-radius:20px;">
                </div>
            </div>

            {{-- paragraph1 --}}
            <div class="col-sm-4" data-aos="fade-right" data-aos-duration="2000">
                <p class="fw-bold fs-2">Lorem ipsum dolor sit amet.</p>
                <button class="blog_btn fs-4 p-1">Vedios <span><x-ionicon-videocam-outline class="ms-1"
                            style="height: 5vh;" /></span></button>
                <p class="fs-4">
                    Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis corrupti.
                    Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore atque.
                </p>
                <a href="#" style="text-decoration: none; color:gray;">
                    <p class="card-text text-danger fs-4">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray" />
                </a></span>
                </p>

                {{-- paragraph2 --}}
                <p class="fw-bold fs-2">Lorem ipsum dolor sit amet.</p>
                <button class="blog_btn2 fs-4 p-1">Podcasts <span><x-ionicon-mic class="ms-1"
                            style="height: 5vh;" /></span></button>
                <p class="fs-4">
                    Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis corrupti.
                    Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore atque.
                </p>
                <a href="#" style="text-decoration: none; color:gray;">
                    <p class="card-text text-danger fs-4">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray" />
                </a></span>
                </p>

                {{-- paragraph3 --}}
                <p class="fw-bold fs-2">Lorem ipsum dolor sit amet.</p>
                <button class="blog_btn3 fs-4 p-1">Articles <span><x-ionicon-logo-alipay class="ms-1"
                            style="height: 5vh;" /></span></button>
                <p class="fs-4">
                    Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis corrupti.
                    Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore atque.
                </p>
                <a href="#" style="text-decoration: none; color:gray;">
                    <p class="card-text text-danger fs-4">Learn More <span><x-ionicon-arrow-forward-outline
                                style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray" />
                </a></span>
                </p>
            </div>
            {{-- card1 --}}
            <div class="col-sm-4 text-secondary"data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="card mb-3" style="border-radius:20px; min-width: 300px; border:1px solid gray">
                    <p class="fw-bold fs-2 ps-4">
                        <span class="bg-warning text-warning me-2" style="height:1vh; width:2px;">.</span> Search Keywords
                    </p>
                    <div div class="col-sm-11 m-auto">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 mb-4 fs-4" type="search" placeholder="Searching..."
                                aria-label="Search"
                                style="box-shadow: 0px 3px 8px 0px rgb(204, 202, 202); height:50px; border-radius: 10px;">
                            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                        </form>
                    </div>
                </div>
                {{-- card2 --}}
                <div class="card mb-3" style="border-radius:20px; min-width: 300px; border:1px solid gray">
                    <p class="fw-bold fs-2 ps-4">
                        <span class="bg-warning text-warning me-2" style="height:1vh; width:2px;">.</span>Categories
                    </p>
                    <div class="row mb-3 m-auto">
                        <div class="col-sm-5 mb-3 ms-3">
                            <button class="btnbox ms-3">Everyday</button>
                            <button class="btnbox ms-3">Language</button>
                            <button class="btnbox ms-3">Conjugation</button>
                        </div>

                        <div class="col-sm-6 mb-3 ms-3">
                            <button class="btnbox ms-3">Business</button>
                            <button class="btnbox ms-3">Grammar</button>
                            <button class="btnbox ms-3">Vocabulary</button>

                        </div>
                    </div>
                </div>

                {{-- card3 --}}
                <div class="card mb-3" style="border-radius:20px; min-width: 300px; border:1px solid gray">
                    <p class="fw-bold fs-2 ps-4">
                        <span class="bg-warning text-warning me-2" style="height:1vh; width:2px;">.</span>Languages
                    </p>
                    <div class="row mb-3">
                        <div class="col-sm-3 mb-3 ms-3">
                            <button class="btnbox2 ms-3">English</button>
                            <button class="btnbox2 ms-3">Koren</button>
                            <button class="btnbox2 ms-3">Japanese</button>
                        </div>

                        <div class="col-sm-3 mb-3 ms-3">
                            <button class="btnbox2 ms-3">Spanish</button>
                            <button class="btnbox2 ms-3">German</button>

                        </div>

                        <div class="col-sm-3 mb-3 ms-3">
                            <button class="btnbox2 ms-3">French</button>
                            <button class="btnbox2 ms-3">Italian</button>


                        </div>
                    </div>
                </div>

                {{-- card4 --}}
                <div class="card mb-3" style="border-radius:20px; min-width: 300px; border:1px solid gray">
                    <p class="fw-bold fs-2 ps-4">
                        <span class="bg-warning text-warning me-2 " style="height:1vh; width:2px;">.</span>Recent Post
                    </p>

                    <div class="row mb-3  m-auto">
                        <div class="col-sm-3 mb-3">
                            <p class="btnbox3 ms-1"></p>
                            <p class="btnbox3 ms-1"></p>
                            <p class="btnbox3 ms-1"></p>
                        </div>

                        <div class="col-sm-6 mb-3 ms-2 pt-3">
                            <p class="fs-5 ms-4">
                                Date<br /> Lorem ipsum dolor sit amet.
                            </p>

                            <p class="fs-5 ms-4">
                                Date<br /> Lorem ipsum dolor sit amet.
                            </p>

                            <p class="fs-5 ms-4">
                                Date<br /> Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            {{-- button --}}
            <div class="row justify-content-center">
                <button class="blog_btn2 fs-5 fw-bold col-sm-3 text-dark p-3 mb-4">Load More Content</button>
            </div>

            {{-- Our Trending Blogs --}}
            <div class="row" data-aos="fade-right" data-aos-duration="2000">
                <p class="fw-bold display-5 text-center mb-4">Our Trending Blogs</p>
            </div>

            {{-- img --}}
            <div class="row  p-3" data-aos="zoom-in-right" data-aos-duration="2000">
                {{-- 1 --}}
                {{-- img1 --}}
                <div class="col-sm-3">
                    <div class="card" style="border-radius:20px; border:none;">
                        <img src="{{ asset('image\blog_beautifulgirl.png') }}" class="d-block p-3 w-100 img-fluid"
                            alt="..." style="height: 250px; border-radius:20px;">
                    </div>

                    {{-- img2 --}}
                    <div class="card mt-5" style="border-radius:20px;  border:none;">
                        <img src="{{ asset('image\blog_twoboy.png') }}" class="d-block p-3 w-100 img-fluid"
                            alt="..." style="height: 300px; border-radius:20px;">
                    </div>
                </div>

                {{-- 2 --}}
                <div class="col-sm-3">
                    <p class="fw-bold">Lorem ipsum dolor sit amet.
                        <button class="blog_btn fs-5 mt-1">Vedios <span><x-ionicon-videocam-outline class=""
                                    style="height: 4vh;" /></span></button>
                    </p>
                    {{-- paragraph1 --}}
                    <p class="" style="font-size: 17px;">
                        Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis
                        corrupti.
                        Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore
                        atque.
                    </p>
                    <a href="#" style="text-decoration: none; color:gray;">
                        <p class="fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                    style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray; border:none; " />
                    </a></span>
                    </p>

                    {{-- paragraph2 --}}
                    <p class="fw-bold ">Lorem ipsum dolor sit amet.
                        <button class="blog_btn2 fs-5 mt-1">Podcasts <span><x-ionicon-mic class="ms-1"
                                    style="height: 4vh;" /></span></button>
                    </p>
                    <p class="" style="font-size: 17px;">
                        Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis
                        corrupti.
                        Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore
                        atque.
                    </p>
                    <a href="#" style="text-decoration: none; color:gray;">
                        <p class="fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                    style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray; border:none; " />
                    </a></span>
                    </p>
                </div>

                {{-- 3 --}}
                {{-- img3 --}}
                <div class="col-sm-3">
                    <div class="card" style="border-radius:20px; border:none;">
                        <img src="{{ asset('image\blog_male-female.png') }}" class="d-block p-3 w-100 img-fluid"
                            alt="..." style="height: 250px; border-radius:20px;">
                    </div>

                    {{-- img4 --}}
                    <div class="card mt-5" style="border-radius:20px;  border:none;">
                        <img src="{{ asset('image\blog_friend.png') }}" class="d-block p-3 w-100 img-fluid"
                            alt="..." style="height: 300px; border-radius:20px;">
                    </div>
                </div>

                {{-- 4 --}}
                <div class="col-sm-3">
                    <p class="fw-bold ">Lorem ipsum dolor sit amet.
                        <button class="blog_btn2 fs-5 mt-1">Podcasts <span><x-ionicon-mic class="ms-1"
                                    style="height: 4vh;" /></span></button>
                    </p>

                    {{-- paragraph3 --}}
                    <p class="" style="font-size: 17px;">
                        Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis
                        corrupti.
                        Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore
                        atque.
                    </p>
                    <a href="#" style="text-decoration: none; color:gray;">
                        <p class="fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                    style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray; border:none; " />
                    </a></span>
                    </p>

                    {{-- paragraph4 --}}
                    <p class="fw-bold">Lorem ipsum dolor sit amet.
                        <button class="blog_btn fs-5 mt-1">Vedios <span><x-ionicon-videocam-outline class=""
                                    style="height: 4vh;" /></span></button>
                    </p>
                    <p class="" style="font-size: 17px;">
                        Lorem ipsum dolor sit amet. Et illo molestias id dolore modi sit reprehenderit quia et omnis
                        corrupti.
                        Et maxime autem hic repellendus numquam non consectetur voluptatem qui ratione dolor et tempore
                        atque.
                    </p>
                    <a href="#" style="text-decoration: none; color:gray;">
                        <p class="fs-5">Learn More <span><x-ionicon-arrow-forward-outline
                                    style="height:5vh; width:3vh; margin-left:2px; background: none; color:gray; border:none; " />
                    </a></span>
                    </p>
                </div>

            </div>

            {{-- girl footer_templete --}}
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-sm-10 col-md-10  girlfoot">
                    <img src="{{ asset('image/girlfoot.png') }}" alt="img" class="img-fluid w-100" />
                    <div class="text-overlay ms-5 col-sm-5 ">
                        <b class="fw-bold display-5 text-dark">Lorem Ipsam Dolor</b>
                        <p class="fs-5">Lorem ipsum dolor sit amet. Et sint dolorem vel
                            pariatur galisum et laboriosam nobis qui rerum
                            delectus sed nobis maiores.</p>
                        <button class="btn btn-dark fw-bold fs-4">APPLY NOW</button>
                    </div>
                </div>
            </div>
            {{-- end conta... --}}
        </div>
    @endsection
