<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<div class="container" id="tack_1">
    <div class="row height align-content-center justify-content-center my-work-row">
        <div class="col-12 tack_title">
            <p>When you click on the picture, the boarder should be added around</p>
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random1" alt="">
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random2" alt="">
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random3" alt="">
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random4" alt="">
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random5" alt="">
        </div>
        <div class="co-6 col-sm-3 col-md-4 mt-2 click_item">
            <img class="rounded my_click" src="https://picsum.photos/200?random6" alt="">
        </div>
    </div>
    <script>

        document.querySelector('#tack_1').onclick = function (event) {
            event = event || window.event;
            if (event.target.tagName == "IMG" && event.target.classList.contains('border', 'border-warning')) {
                event.target.classList.remove('border', 'border-warning')
            } else {
                if (event.target.tagName == "IMG") {
                    event.target.classList.add('border', 'border-warning');
                }
            }
        };
    </script>
</div>

<div class="container" id="tack_2">
    <div class="row height align-content-center justify-content-center">
        <div class="col-12 tack_title">
            <p>Show mouse coordinates in the block</p>
        </div>
        <div class="col-12">
            <p>
                <span>X: <span id="offx">0</span></span>
                <span>Y: <span id="offy">0</span></span>
            </p>
        </div>

        <div class="col-12 height-500 h-50 border border-dark" id="Work_1">
            <div id="mousediv"></div>
        </div>
    </div>
    <script>
        document.querySelector('#Work_1').onmousemove = function (event) {
            event = event || window.event;
            document.querySelector('#offx').innerHTML = event.offsetX;
            document.querySelector('#offy').innerHTML = event.offsetY;
            var moveDiv = document.getElementById('mousediv');
            var x = event.offsetX;
            var y = event.offsetY;
            if (x > 0 && y > 0) {
                moveDiv.style.top = (y - 40) + 'px';
                moveDiv.style.left = (x - 40) + 'px';
            }
        };
    </script>
</div>

<div class="container" id="tack_3">
    <div class="row height align-content-center justify-content-center">
        <div class="col-12 tack_title">
            <p>Slider</p>
        </div>
        <div class="slider col-12 height-500">
            <div class="col-12 slider-items">
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random1" alt="">
                </div>
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random2" alt="">
                </div>
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random3" alt="">
                </div>
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random4" alt="">
                </div>
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random5" alt="">
                </div>
                <div class="slide">
                    <img class="slide_item rounded" src="https://picsum.photos/1000/500?random6" alt="">
                </div>
            </div>
            <div class="col-12 slider-control">
                <div class="control_arrow prev_arrow"><i class="fas fa-angle-double-left"></i></div>
                <div class="control_arrow next_arrow"><i class="fas fa-angle-double-right"></i></div>
            </div>
        </div>
    </div>
    <script>

        var slide = document.querySelectorAll('.slide'),
            firstSlide = slide[0],
            totalSlides = slide.length,
            slideIndex = 1,
            i;

        firstSlide.className += ' active';

        var activeSlide = document.querySelector('.slide.active');

        document.querySelector('.prev_arrow').onclick = function () {
            slideAction(-1)
        };

        document.querySelector('.next_arrow').onclick = function () {
            slideAction(1)
        };

        function slideAction(n) {
            InitSlide(slideIndex += n);
        }

        function InitSlide(n) {
            if (n > totalSlides) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = totalSlides
            }

            for (i = 0; i < totalSlides; i++) {
                slide[i].classList.remove('active');
            }
            slide[slideIndex - 1].className += " active";
        }

    </script>
</div>

<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script src="js/vendor/lzload.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>

</html>
|