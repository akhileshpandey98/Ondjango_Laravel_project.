@extends('layouts.main_page')
@section('title', 'About')
@section('main_page-section')
    <div class="container-fluid set_img" style="background-image: url('{{ asset('image/About_us_bg.png') }}'); height: 100vh;"
        class="img-fluid" data-aos="fade-right" data-aos-duration="2000">
    </div>
    <h2 class="fw-bold display-5 text-center py-3">Our History</h2>

    <div class="container-fluid">
        <div class="row justify-content-center ps-5" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="col-sm-5 ">
                <div class="mb-5">
                    <img src="{{ asset('image\people-taking.png') }}" alt="img" height="100vh"
                        class="img-fluid w-100" />
                </div>
            </div>
            <div class="col-sm-7">
                <p class="abotxt ps-3 p-5">Lorem ipsum dolor sit amet. Eos aspernatur nihil id dignissimos labore sit sequi
                    excepturi id velit illo.
                    Aut quae nulla id sunt repellat eum dolore deleniti est sapiente alias. Et voluptatem eius ut quia nemo
                    non nihil dolores aut quam enim quo expedita corporis et sunt natus sed aspernatur dicta! Aut soluta
                    ipsum et nihil magnam sed consequatur inventore ut aperiam porro.
                    Eos nihil natus non esse facilis ut illo rerum id tempore dolores. Sed ullam facere et ipsam aperiam ut
                    illo dolores. Sed voluptates excepturi qui exercitationem aperiam qui illum perferendis ut dolorum
                    fugit. Lorem ipsum dolor sit amet. Eos aspernatur nihil id dignissimos labore sit sequi excepturi id
                    velit illo. Aut quae nulla id sunt repellat eum dolore deleniti est sapiente alias. Et voluptatem eius
                    ut quia nemo non nihil dolores aut quam enim quo expedita corporis et sunt natus sed aspernatur dicta!
                </p>
            </div>

        </div>

        <div class="row justify-content-center" data-aos="fade-right" data-aos-duration="2000">
            <p class="col-sm-11 fs-2 py-5 mb-3" style="color: #682031;">
                Lorem ipsum dolor sit amet. Eos aspernatur nihil id dignissimos labore sit sequi excepturi id velit illo.
                Aut quae nulla id sunt repellat eum dolore deleniti est sapiente alias. Et voluptatem eius ut quia nemo non
                nihil dolores aut quam enim quo expedita corporis et sunt natus sed aspernatur dicta! Aut soluta ipsum et
                nihil magnam sed consequatur inventore ut aperiam porro.
            </p>
        </div>

<div class="row" data-aos="zoom-in-down" data-aos-duration="2000">
    <div class="col-sm-4 text-center"><h2 class="display-5 fw-bold root">Who we are</h2></div>
    <div class="col-sm-4 text-center"><h2 class="fs-1 fw-bold">Our teams</h2></div>
    <div class="col-sm-4 text-center"><h2 class="fs-1 fw-bold">Leadership</h2></div>
</div>

<div class="row" data-aos="zoom-in-down" data-aos-duration="2000">
    <div class="col-sm-7 ">
        <p class="abotxt2 ps-3 p-5">Lorem ipsum dolor sit amet. Eos aspernatur nihil id dignissimos labore sit sequi
            excepturi id velit illo.
            Aut quae nulla id sunt repellat eum dolore deleniti est sapiente alias. Et voluptatem eius ut quia nemo
            non nihil dolores aut quam enim quo expedita corporis et sunt natus sed aspernatur dicta! Aut soluta
            ipsum et nihil magnam sed consequatur inventore ut aperiam porro.
            Eos nihil natus non esse facilis ut illo rerum id tempore dolores. Sed ullam facere et ipsam aperiam ut
            illo dolores. Sed voluptates excepturi qui exercitationem aperiam qui illum perferendis ut dolorum
            fugit. Lorem ipsum dolor sit amet. Eos aspernatur nihil id dignissimos labore sit sequi excepturi id
            velit illo. Aut quae nulla id sunt repellat eum dolore deleniti est sapiente alias. Et voluptatem eius
            ut quia nemo non nihil dolores aut quam enim quo expedita corporis et sunt natus sed aspernatur dicta!
        </p>
    </div>

    <div class="col-sm-5 py-5">
        <div class="mb-5">
            <img src="{{ asset('image\group-positive.png') }}" alt="img" height="100vh"
                class="img-fluid w-100" />
        </div>
    </div>
    
</div>


  {{-- girl footer_templete --}}
  <div class="row justify-content-center"  data-aos="fade-up"  data-aos-duration="2000">
    <div class="col-sm-10 col-md-10  girlfoot">
        <img src="image/girlfoot.png" alt="img" class="img-contain" />
        <div class="text-overlay ms-5 col-sm-5 ">
            <b class="fw-bold display-5 text-dark">Lorem Ipsam Dolor</b>
            <p class="fs-5">Lorem ipsum dolor sit amet. Et sint dolorem vel
                pariatur galisum et laboriosam nobis qui rerum
                delectus sed nobis maiores.</p>
            <button class="btn btn-dark fw-bold">APPLY NOW</button>
        </div>
    </div>
</div>



        {{-- end container-fluid --}}
    </div>
@endsection
