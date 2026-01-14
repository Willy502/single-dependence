@extends('index')

@section('main-content')
    <!-- Projects -->
	<div class="container">
		<header class="header-page">
            <h1 class="title title--h1 js-lines">Projects.</h1>
			<div class="select js-down">
			    <span class="placeholder">Select category</span>
			    <ul class="filters">
			        <li class="filters__item"><h6 class="title title--overhead filters-title">Categories</h6></li>
				    <li class="filters__item active" data-filter="*"><a class="filters__link active force-black" href="#filter">All</a></li>
				    <li class="filters__item" data-filter=".category-website"><a class="filters__link force-black" href="#filter">Website</a></li>
					<li class="filters__item" data-filter=".category-app"><a class="filters__link force-black" href="#filter">Mobile App</a></li>
					<li class="filters__item" data-filter=".category-desktop"><a class="filters__link force-black" href="#filter">Desktop</a></li>
				    <!-- <li class="filters__item" data-filter=".category-design"><a class="filters__link force-black" href="#filter">Design</a></li>
				    <li class="filters__item" data-filter=".category-app"><a class="filters__link force-black" href="#filter">App</a></li> -->
			    </ul>
			    <input type="hidden" name="changemetoo"/>
			</div>
		</header>
		
	    <div class="flex-grid js-masonry-project js-sort">
		    <!-- Project -->
		    <figure class="item-project item-masonry js-block category-website">
			    <a href="https://resigt.com" target="_blank" class="onHover trigger-plus" data-size="1000x1333">
				    <img class="item-news__image lazyload" src="assets/img/projects/project-resi.png" alt="Project">
				    <div class="onHover__details">
					    <div class="client">RESI</div>
                        <h3 class="title title--h5">Website</h3>
					</div>
                </a>
                
                <br />
                <br />
                <br />
                <br />
			</figure>
		    <!-- /Project -->

			<!-- Project -->
		    <figure class="item-project item-masonry js-block category-desktop">
			    <a target="_blank" class="onHover trigger-plus" data-size="1000x1333">
				    <img class="item-news__image lazyload" src="assets/img/projects/project-inventarios.png" alt="Project">
				    <div class="onHover__details">
					    <div class="client">Inventory Management System</div>
                        <h3 class="title title--h5">Desktop</h3>
					</div>
                </a>
                
                <br />
                <br />
                <br />
                <br />
			</figure>
		    <!-- /Project -->

			<!-- Project -->
		    <figure class="item-project item-masonry js-block category-app">
			    <a href="#" target="_blank" id="link-lash" class="onHover trigger-plus" data-size="1000x1333">
				    <img class="item-news__image lazyload" src="assets/img/projects/project-lash.png" alt="Project">
				    <div class="onHover__details">
					    <div class="client">Lash & Brow</div>
                        <h3 class="title title--h5">iOS and Android Mobile App</h3>
					</div>
                </a>
                
                <br />
                <br />
                <br />
                <br />
			</figure>
		    <!-- /Project -->

			<!-- Project -->
		    <figure class="item-project item-masonry js-block category-website">
			    <a href="https://centranorte.com.gt" target="_blank" class="onHover trigger-plus" data-size="1000x1333">
				    <img class="item-news__image lazyload" src="assets/img/projects/project-centra.png" alt="Project">
				    <div class="onHover__details">
					    <div class="client">Centra Norte</div>
                        <h3 class="title title--h5">Website</h3>
					</div>
                </a>
                
                <br />
                <br />
                <br />
                <br />
			</figure>
		    <!-- /Project -->
			
		</div>

	</div>
    <!-- /Projects -->

	<script>
		(function() {
			var userAgent = window.navigator.userAgent,
				platform = window.navigator.platform,
				macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
				windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
				iosPlatforms = ['iPhone', 'iPad', 'iPod'],
				os = null;
			var urlLink = "";

			if (macosPlatforms.indexOf(platform) !== -1) {
				os = "Mac OS";
				urlLink = 'https://apps.apple.com/gt/app/lash-and-brow/id1578830723';
			} else if (iosPlatforms.indexOf(platform) !== -1) {
				os = "iOS";
				urlLink = 'https://apps.apple.com/gt/app/lash-and-brow/id1578830723';
			} else if (windowsPlatforms.indexOf(platform) !== -1) {
				os = "Windows";
				urlLink = 'https://play.google.com/store/apps/details?id=com.singledependence.lashnbrow';
			} else if (/Android/.test(userAgent)) {
				os = "Android";
				urlLink = 'https://play.google.com/store/apps/details?id=com.singledependence.lashnbrow';
			} else if (!os && /Linux/.test(platform)) {
				os = "Linux";
				urlLink = 'https://play.google.com/store/apps/details?id=com.singledependence.lashnbrow';
			}
			
			var link = document.getElementById("link-lash");
			link.setAttribute('href', urlLink);
		})();
	</script>

@endsection

@section('footer')
    @include('footer.footer')
@endsection