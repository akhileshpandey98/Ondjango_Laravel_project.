<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Document</title>
    <style>
        .swiper-slide img {
            width: 7rem;
            height: auto;

        }
    </style>
</head>

<body>
    <div class="row">
        <div class="container swiper bg-dark" style="max-width:800px; padding-top:45px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide card-item m-auto">
                    <a href="#"><img src="image/c_english.png" alt=""></a>
                </div>
                <div class="swiper-slide card-item m-auto">
                    <a href="#"><img src="image/c_French.png" alt=""></a>
                </div>
                <div class="swiper-slide card-item m-auto">
                    <a href="#"><img src="image/c_spanish.png" alt=""></a>
                </div>
                <div class="swiper-slide card-item m-auto">
                    <a href="#"><img src="image/c_German.png" alt=""></a>
                </div>
                <div class="swiper-slide card-item m-auto">
                    <a href="#"><img src="image/c_Portuguese.png" alt=""></a>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    
    <script>
        var swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                // 1200: {
                //     slidesPerView: 5,
                // },

            }
        });
    </script>
</body>

</html>

