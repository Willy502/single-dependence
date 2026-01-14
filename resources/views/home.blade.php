@extends('index')

@section('main-content')
    <!-- Hero -->
    <header class="hero">
	    <div class="slider slider-horizontal">
		    <div class="slider__caption swiper-container">
                <div class="swiper-wrapper">
			        <!-- Caption 1 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
						    <h6 class="title title--overhead"><span class="down-up"><span>Websites / E-Commerce</span></span></h6>
							<h1 class="title title--display-1"><span class="down-up"><span>Awesome-looking and</span></span></h1>
							<h1 class="title title--display-1"><span class="down-up"><span>functional websites</span></span></h1>
				            <p class="description"><span class="down-up"><span>
								Take your business to the next level.<br />
								Start selling online or get new costumers with your own amazing website.</span></span></p>
                            <a class="btn-link btn-link--circle-right" href="{{ route('contact') }}"><span class="down-up"><span>GET A WEBSITE<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 1 -->
					
			        <!-- Caption 2 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>Apps</span></span></h6>
							<h1 class="title title--display-1"><span class="down-up"><span>Interested in build</span></span></h1>
							<h1 class="title title--display-1"><span class="down-up"><span>an app?</span></span></h1>
				            <p class="description"><span class="down-up"><span>
								We can help you making your ideas become a reality or to improve your company process.
								</span></span></p>
                            <a class="btn-link btn-link--circle-right" href="{{ route('contact') }}"><span class="down-up"><span>GET AN APP<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 2 -->
					
			        <!-- Caption 3 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>Estrategy / Design / Branding / Social Media Marketing</span></span></h6>
			                <h1 class="title title--display-1"><span class="down-up"><span>We care about you</span></span></h1>
				            <p class="description"><span class="down-up"><span>
							Need help with your company or you brand? <br />
							We can help you!
							</span></span></p>
                            <a class="btn-link btn-link--circle-right" href="{{ route('contact') }}"><span class="down-up"><span>SEE INFO<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
					<!-- /Caption 3 -->
					
					<!-- Caption 4 -->
			        <div class="swiper-slide">
					    <div class="slider__item">
		                    <h6 class="title title--overhead"><span class="down-up"><span>Education</span></span></h6>
							<h1 class="title title--display-1"><span class="down-up"><span class="notranslate">Single Dependence</span></span></h1>
							<h1 class="title title--display-1"><span class="down-up"><span class="notranslate">Education</span></span></h1>
				            <p class="description"><span class="down-up"><span>
							Learn how to make apps, websites and more <br />
							</span></span></p>
                            <a class="btn-link btn-link--circle-right" href="{{ route('education') }}"><span class="down-up"><span>SEE INFO<i class="circle circle--right icon-right-open"></i></span></span></a>
						</div>
					</div>
			        <!-- /Caption 4 -->
		        </div>
			</div>

		    <div class="slider__image swiper-container reveal">
                <div class="swiper-wrapper">
			        <!-- Image 1 -->
			        <div class="swiper-slide">
						<div class="cover-slider lazyload overlay--45" data-bg="assets/img/home/website.jpg"><a class="swiper-slide__link" href="#"></a></div>
					</div>
			        <!-- /Image 1 -->
					
			        <!-- Image 2 -->
			        <div class="swiper-slide">
						<div class="cover-slider lazyload overlay--45" data-bg="assets/img/home/apps.jpg"><a class="swiper-slide__link" href="#"></a></div>
					</div>
			        <!-- /Image 2 -->
					
			        <!-- Image 3 -->
			        <div class="swiper-slide">
						<div class="cover-slider lazyload overlay--45" data-bg="assets/img/home/design.jpg"><a class="swiper-slide__link" href="#"></a></div>
					</div>
					<!-- /Image 3 -->
					
					<!-- Image 4 -->
			        <div class="swiper-slide">
						<div class="cover-slider lazyload overlay--45" data-bg="assets/img/home/learn.png"><a class="swiper-slide__link" href="#"></a></div>
					</div>
			        <!-- /Image 4 -->
		        </div>
			</div>

		    <!-- Control -->
			<div class="control-slider control-slider--vertical swiper-control">
			    <div></div>
				<div class="swiper-pagination"></div>
				<div>
				    <div class="swiper-button-next zoom-cursor">
					    <svg class="slider-nav slider-nav--progress" viewBox="0 0 46 46">
                            <g class="slider-nav__path-progress slider-nav__path-progress--gray">
                                <path d="M0.5,23a22.5,22.5 0 1,0 45,0a22.5,22.5 0 1,0 -45,0" />
                            </g>
                        </svg>
                        <svg class="slider-nav slider-nav--gray" viewBox="0 0 46 46">
                            <circle class="slider-nav__path--gray" cx="23" cy="23" r="22.5"/>
                            <path class="slider-nav__arrow" d="M26.45 22.45l-4.91-4.91a.7707464.7707464 0 0 0-1.09 1.09L24.82 23l-4.36 4.36a.7707464.7707464 0 0 0 1.09 1.09l4.91-4.91a.77.77 0 0 0-.01-1.09z"/>
                        </svg>
					</div>
				    <div class="swiper-button-prev zoom-cursor">
                        <svg class="slider-nav slider-nav--gray" viewBox="0 0 46 46">
                            <circle class="slider-nav__path--gray" cx="23" cy="23" r="22.5"/>
                            <path class="slider-nav__arrow" d="M18.5 23.55l4.91 4.91a.7707464.7707464 0 1 0 1.09-1.09L20.14 23l4.36-4.36a.7707464.7707464 0 0 0-1.09-1.09l-4.91 4.9a.77.77 0 0 0 0 1.1z"/>
                        </svg>
					</div>
				</div>
			</div>
			<!-- /Control -->
			
			<div class="social social--floating">
		        <a class="social__link" href="#">FB</a>
		        <a class="social__link" href="#">TW</a>
		        <a class="social__link" href="#">IG</a>
		    </div>
		</div>
    </header>
    <!-- /Hero -->
@endsection
    
