@extends('index')

@section('main-content')
    <!-- Intro -->
	<header class="header-page header-fullscreen overlay">
		<div class="wrap-bg">
			<div class="js-image lazyload jarallax" data-image="assets/img/contact.jpg"></div>
		</div>
		<div class="container flex-center-end js-opacity">
			<!-- Title -->
			<div class="flex-center">
				<div class="flex-center__inner">
					<h1 class="title title--display-1 js-lines">We collaborate with amazing brands and people.</h1>

				</div>
			</div>
			<!-- /Title -->
			<a class="btn-link btn-link--circle-right" href="!#start">Contact us<i
					class="circle circle--white circle--right icon-down-open"></i></a>
		</div>
	</header>
	<!-- /Intro -->

	<!-- Contact -->
	<!-- <div id="start" class="flex-conteiner-fluid p-0 h--100">

		<div class="row flex-fill justify-content-center align-items-md-center">
			<div class="col-12 col-lg-10 col-xl-8 contect-block js-block">
				<h2 class="title title--h3 text-lg-center js-lines ml-3 mr-3">Just a form. It’s easy.</h2>
				<form id="contact-form" class="ml-3 mr-3 contact-form" data-toggle="validator" action="{{ url('send-mail') }}" method="POST">
					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="form-group">
								<input type="text" class="inputText" id="name" name="name" placeholder="Full name"
									required="required" autocomplete="off"
									oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="form-group">
								<input type="email" class="inputText" id="email" name="email"
									placeholder="Email address" required="required" autocomplete="off"
									oninvalid="setCustomValidity('Email is incorrect')" onkeyup="setCustomValidity('')">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="form-group">
								<textarea class="textarea" id="message" name="message" placeholder="Comment" rows="1"
									required="required" oninvalid="setCustomValidity('Fill in the field')"
									onkeyup="setCustomValidity('')"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-12 col-md-6">
							<button type="submit" class="btn">Send Message</button>
						</div>
						<div class="col-12 col-md-6 text-md-right">
							<div id="validator-contact" class="_hidden">&nbsp;</div>
						</div>
					</div>
				</form>
			</div>
		</div>


	</div> -->
	<!-- /Contact -->
@endsection

@section('footer')
    @include('footer.footer')
@endsection
