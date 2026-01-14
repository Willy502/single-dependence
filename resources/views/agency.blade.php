@extends('index')

@section('main-content')
	<!-- Intro -->
	<header class="header-page header-fullscreen header-page--gutterBottom overlay overlay--45 js-image jarallax"
		data-image="assets/img/about.jpg">
		<div class="header-page__container-fluid align-items-end js-opacity">
			<div class="row no-gutters">
				<div class="col-md-12 col-lg-6">
					<div class="tail header-page__description">Simple solutions for everyone.</div>
				</div>
				<div class="col-md-12 col-lg-6 text-lg-right">
					<a class="btn-link btn-link--circle-right" href="!#start">THE STORY<i
							class="circle circle--white circle--right icon-down-open"></i></a>
				</div>
			</div>
		</div>
	</header>
	<!-- /Intro -->

	<!-- The Story -->
	<article id="start" class="caption-single container">
		<br />
		<div class="row">
			<div class="col-12 col-lg-3">
				<h4 class="title title--overhead js-lines">The story</h4>
			</div>
			<div class="col-12 col-lg-9">
				<h2 class="title title--h4 js-lines">We saw how the world works, we want to make it better.</h2>
				<div class="description noGutters-Bottom js-block">
					<p class="paragraph noGutters-Bottom">It is not enough to create incredible websites and applications, we want to change the people life. <br />
						We know that the world is more difficult than yesterday, and sometimes we want to surrender; but we also believe in hard work,
						responsability, innovation and that an idea have the power to change the world.
					</p>
				</div>
			</div>
		</div>
	</article>
	<!-- /The Story -->

	<!-- WeDo -->
	<article class="caption-single container">
		<div class="row">
			<div class="col-12 col-lg-3">
				<h4 class="title title--overhead js-lines">What we do?</h4>
			</div>
			<div class="col-12 col-lg-9">
				<h2 class="title title--h4 js-lines">Believe in ideas
				</h2>
				<div class="description js-block">
					<p class="paragraph">An idea can change the world, an idea can improve the people life. We help you making your ideas become
						reality, we help you optimize the processes of your company, we help you to connect with people and make new customers. <br />
						We got your back.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 offset-lg-3 mt-3 mt-sm-0">
				<h4 class="title title--h6">SERVICES</h4>
				<ul class="list-unstyled list-block mb-4 mb-sm-0">
					<li>Websites</li>
					<li>E-Commerce</li>
					<li>Native Apps</li>
					<li>Hybrid Apps</li>
					<li>Chat bots</li>
					<li>Outsourcing</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-5">
				<h4 class="title title--h6">STRATEGY, CREATIVE & DESIGN</h4>
				<ul class="list-unstyled list-block">
					<li>Animations</li>
					<li>Branding & Identity</li>
					<li>Creative Concepts & Ideas</li>
					<li>User Experience</li>
					<li>Digital Strategy</li>
					<li>Social Media Campaigns</li>
				</ul>
			</div>
		</div>
	</article>
	<!-- /WeDo -->

	<!-- Team -->
	<article class="caption-single container">
		<div class="row">
			<div class="col-12 col-lg-3">
				<h4 class="title title--overhead js-lines">Our team </h4>
			</div>
			<div class="col-12 col-lg-9">
				<h2 class="title title--h4 js-lines">An amazing team.</h2>
			</div>
		</div>
	</article>

	<div class="container-fluid container-no-gutters mb-3 mb-sm-4">
		<div class="row">
			<!-- itemCard -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 itemCard">
				<div class="itemCard__imageWrap reveal">
					<img class="img-sngl lazyload" src="assets/img/team/alejandro.png" alt="">
				</div>
				<div class="itemCard__header">
					<h4 class="title title--h6 itemCard__title">Alejandro</h4>
					<h5 class="title--overhead">Co-founder & CEO</h5>
				</div>
			</div>
			<!-- /itemCard -->
			<!-- itemCard -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 itemCard">
				<div class="itemCard__imageWrap reveal">
					<img class="img-sngl lazyload" src="assets/img/team/erick.png" alt="">
				</div>
				<div class="itemCard__header">
					<h4 class="title title--h6 itemCard__title">Erick</h4>
					<h5 class="title--overhead">Co-founder & CTO</h5>
				</div>
			</div>
			<!-- /itemCard -->
			<!-- itemCard -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 itemCard">
				<div class="itemCard__imageWrap reveal">
					<img class="img-sngl lazyload" src="assets/img/team/Heiz.png" alt="">
				</div>
				<div class="itemCard__header">
					<h4 class="title title--h6 itemCard__title">Heiz</h4>
					<h5 class="title--overhead">Creative Art Director</h5>
				</div>
			</div>
			<!-- /itemCard -->
			<!-- itemCard -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 itemCard">
				<div class="itemCard__imageWrap reveal">
					<img class="lazyload img-sngl" src="assets/img/team/joe.png" alt="" width="800" height="1000">
				</div>
				<div class="itemCard__header">
					<h4 class="title title--h6 itemCard__title">Joe</h4>
					<h5 class="title--overhead">Social Media Manager</h5>
				</div>
			</div>
			<!-- itemCard -->
		</div>
	</div>
	<!-- /Team -->
@endsection

@section('footer')
    @include('footer.footer')
@endsection