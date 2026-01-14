@extends('index')

@section('main-content')
<!-- Intro -->
<header class="header-page header-page--half js-opacity">
    <div class="container">
        <!-- Title -->
        <h6 class="title title--overhead title--tail">Services</h6>
        <h1 class="title title--display-1 js-lines">Development digital solutions and visual design</h1>
        <!-- /Title -->
    </div>
</header>
<!-- /Intro -->

<!-- Image -->
<figure class="image-container image-container--cutoutRight jarallax reveal">
    <img class="jarallax-img cover lazyload" src="assets/img/service.jpg" alt="" />
</figure>
<!-- /Image -->

<!-- Process -->
<article id="start" class="caption-single container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <h4 class="title title--overhead js-lines">Process</h4>
        </div>
        <div class="col-12 col-lg-9">
            <h2 class="title title--h4 js-lines">We take your idea from sketch to a finished product</h2>
            <div class="description noGutters-Bottom js-block">
                <p class="paragraph noGutters-Bottom">Design, build and maintain websites and apps it's not enough.
                    We care about you and your product,
                    and that's why you accompany us throughout all the process. <br />
                    Besides your ideas are important to us, and the communication is essential to build and design
                    amazing things together.
                </p>
            </div>
        </div>
    </div>
</article>
<!-- /Process -->

<!-- Services -->
<article class="caption-single container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <h4 class="title title--overhead js-lines">Services</h4>
        </div>
        <div class="col-12 col-lg-9">
            <h2 class="title title--h4 js-lines">We can help you with</h2>
        </div>
    </div>
</article>

<div class="container-fluid container-cutout mb--2">
    <div class="row">
        <!-- itemCard -->
        <div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
            <div class="itemCard__imageWrap">
                <img class="itemCard__image lazyload" src="assets/img/services/apps_service.jpg" alt="">
            </div>
            <div class="itemCard__header">
                <h3 class="title title--h5 itemCard__title">Apps</h3>
                <p class="paragraph">We build customized mobile solutions for iOS and Android - taking
                    your idea from rough sketch to finished product.</p>
                <!-- <a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a> -->
            </div>
        </div>
        <!-- /itemCard -->

        <!-- itemCard -->
        <div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
            <div class="itemCard__imageWrap">
                <img class="itemCard__image lazyload" src="assets/img/services/websites_service.jpg" alt="">
            </div>
            <div class="itemCard__header">
                <h3 class="title title--h5 itemCard__title">Websites</h3>
                <p class="paragraph">We design, build, and maintain websites that keep pace with our increasingly
                    digital world.</p>
                <!-- <a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a> -->
            </div>
        </div>
        <!-- /itemCard -->

        <!-- itemCard -->
        <div class="col-12 col-sm-12 col-lg-6 col-xl-4 itemService">
            <div class="itemCard__imageWrap">
                <img class="itemCard__image lazyload" src="assets/img/services/design_service.jpg" alt="">
            </div>
            <div class="itemCard__header">
                <h3 class="title title--h5 itemCard__title">Digital Services</h3>
                <p class="paragraph">We can help you with your branding, design and social media to keep you in
                    touch with your customers.</p>
                <!-- <a class="btn-link" href="#">See Projects <i class="icon-base icon-right-open"></i></a> -->
            </div>
        </div>
        <!-- /itemCard -->
    </div>
</div>
<!-- /Services -->
@endsection

@section('footer')
    @include('footer.footer')
@endsection