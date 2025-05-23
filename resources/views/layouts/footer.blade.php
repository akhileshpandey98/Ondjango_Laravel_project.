{{-- footer --}}
<footer>
    <div class="container-fluid bg-dark">
        <div class="row justify-content-center text-light py-5 ">
            <div class="col-sm-12 " style=" min-height: 150px;"></div>
            <div class="col-sm-4 fs-5">
                <ul type="none">
                    <h5 class="text-justify fw-bold fs-3">CONTACT US</h5>
                    <li class="fw-bold">Address :</li>
                    <li>124,Landmark Lucknow, City Collony</li><br>
                    <li class="fw-bold">Email :</li>
                    <li>goluakhi@gmail.com</li>
                    <li class="mt-1">
                        <span><a href="#"><x-ionicon-logo-facebook
                                    style="height:6vh; width:5vh; margin-left:6px; background: none; color:white;" /></a></span>
                        <span><a href="#"><x-ionicon-logo-instagram
                                    style="height:6vh; width:5vh; margin-left:6px; background: none; color:white;" /></a></span>
                        <span><a href="#"></a><x-ionicon-logo-twitter
                                style="height:6vh; width:5vh; margin-left:6px; background: none; color:white;" /></span>
                    </li>
                </ul>
            </div>

            <div class="col-sm-3 fs-5">

                <ul type="none">
                    <h5 class="fw-bold fs-3">NAVIGATION</h5>
                    <a href="{{ asset('/') }}" class="link-light" style="text-decoration: none;">
                        <li>> HOME</li>
                    </a>
                    <a href="{{ asset('#') }}" class="link-light" style="text-decoration: none;">
                        <li>> TEACHERS</li>
                    </a>
                    <a href="{{ asset('blog') }}" class="link-light" style="text-decoration: none;">
                        <li>> BLOGS</li>
                    </a>
                    <a href="{{ asset('about') }}" class="link-light" style="text-decoration: none;">
                        <li>> ABOUTS</li>
                    </a>
                    <a href="{{ asset('contact') }}" class="link-light" style="text-decoration: none;">
                        <li>> CONTACT</li>
                    </a>
                </ul>
            </div>

            <div class="col-sm-3 ps-5 ">
                <h5 class="fw-bold fs-3">GET IN TOUCH</h5>
                <label class="text-justify mb-3">Lorem ipsum dolor sit amet. Aut labore autem utodio dolorem ut tempora
                    velit? Nam nostrum incidunt aut rerum veritatis qui voluptatem voluptas aut velit repellat qui
                    nisi expedita!</label>
                <span class="d-flex"><input type="text"/><button class="fw-bold btn btn-warning btn-sm mb-1"
                        style=" transform: translatex(-60px); border-radius:15px;">SUBMIT</button></span>
            </div>

        </div>
    </div>
</footer>
