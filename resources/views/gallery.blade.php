<!-- Menghubungkan dengan view template master -->
@extends('navbar')

@section('konten')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
    <link rel="stylesheet" href="css/gallery.css">
    <!-- magnific-popup css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/logreg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="gallery">
        <ul class="controls">
            <li class="button active" data-filter="all">All Photos</li>
            <li class="button" data-filter="family">HM Family</li>
            <li class="button" data-filter="modern">Modern Dance</li>
            <li class="button" data-filter="kontemporer">Kontemporer Dance</li>
            <li class="button" data-filter="wedding">Wedding Dance</li>
            <li class="button" data-filter="back">Back Dancer</li>
            <li class="button" data-filter="kpop">Kpop Cover Dance</li>
        </ul>

        <div class="image-container">
            <a href="img/hm1.jpg" class="image family">
                <img src="img/hm1.jpg" alt="">
            </a>
            <a href="img/mod1.jpg" class="image modern">
                <img src="img/mod1.jpg" alt="">
            </a>
            <a href="img/kon1.jpg" class="image kontemporer">
                <img src="img/kon1.jpg" alt="">
            </a>
            <a href="img/wed1.jpg" class="image wedding">
                <img src="img/wed1.jpg" alt="">
            </a>
            <a href="img/bd1.jpg" class="image back">
                <img src="img/bd1.jpg" alt="">
            </a>
            <a href="img/kpop1.jpg" class="image kpop">
                <img src="img/kpop1.jpg" alt="">
            </a>
            <a href="img/hm2.jpg" class="image family">
                <img src="img/hm2.jpg" alt="">
            </a>
            <a href="img/mod2.jpg" class="image modern">
                <img src="img/mod2.jpg" alt="">
            </a>
            <a href="img/kon2.jpg" class="image kontemporer">
                <img src="img/kon2.jpg" alt="">
            </a>
            <a href="img/wed2.jpg" class="image wedding">
                <img src="img/wed2.jpg" alt="">
            </a>
            <a href="img/bd2.jpg" class="image back">
                <img src="img/bd2.jpg" alt="">
            </a>
            <a href="img/kpop2.jpg" class="image kpop">
                <img src="img/kpop2.jpg" alt="">
            </a>
            <a href="img/hm3.jpg" class="image family">
                <img src="img/hm3.jpg" alt="">
            </a>
            <a href="img/mod3.jpg" class="image modern">
                <img src="img/mod3.jpg" alt="">
            </a>
            <a href="img/kon3.jpg" class="image kontemporer">
                <img src="img/kon3.jpg" alt="">
            </a>
            <a href="img/wed3.jpg" class="image wedding">
                <img src="img/wed3.jpg" alt="">
            </a>
            <a href="img/bd3.jpg" class="image back">
                <img src="img/bd3.jpg" alt="">
            </a>
            <a href="img/kpop3.jpg" class="image kpop">
                <img src="img/kpop3.jpg" alt="">
            </a>
            <a href="img/hm4.jpg" class="image family">
                <img src="img/hm4.jpg" alt="">
            </a>
            <a href="img/mod4.jpg" class="image modern">
                <img src="img/mod4.jpg" alt="">
            </a>
            <a href="img/kon4.jpg" class="image kontemporer">
                <img src="img/kon4.jpg" alt="">
            </a>
            <a href="img/wed4.jpg" class="image wedding">
                <img src="img/wed4.jpg" alt="">
            </a>
            <a href="img/kpop4.jpg" class="image kpop">
                <img src="img/kpop4.jpg" alt="">
            </a>
            <a href="img/hm5.jpg" class="image family">
                <img src="img/hm5.jpg" alt="">
            </a>
            <a href="img/kon5.jpg" class="image kontemporer">
                <img src="img/kon5.jpg" alt="">
            </a>
            <a href="img/wed5.jpg" class="image wedding">
                <img src="img/wed5.jpg" alt="">
            </a>
            <a href="img/hm6.jpg" class="image family">
                <img src="img/hm6.jpg" alt="">
            </a>
            <a href="img/hm7.jpg" class="image family">
                <img src="img/hm7.jpg" alt="">
            </a>
        </div>


    </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.button').click(function() {
                $(this).addClass('active').siblings().removeClass('active');

                var filter = $(this).attr('data-filter')

                if (filter == 'all') {
                    $('.image').show(400);
                } else {
                    $('.image').not('.' + filter).hide(200);
                    $('.image').filter('.' + filter).show(400);
                }
            });
        });

        $('.gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        })
    </script>


</body>

</html>


@endsection