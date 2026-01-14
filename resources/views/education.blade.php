@extends('index')

@section('main-content')
    <!-- News -->
	<div class="container">
		<header class="header-page">
            <h1 class="title title--h1 js-lines">Education.</h1>
			<div class="select js-down">
			    <span class="placeholder">Select category</span>
			    <ul class="filters">
			        <li class="filters__item"><h6 class="title title--overhead filters-title">Categories</h6></li>
				    <li class="filters__item active" data-filter="*"><a class="filters__link force-black" href="#filter">All</a></li>
				    <li class="filters__item" data-filter=".category-websites"><a class="filters__link force-black" href="#filter">Websites</a></li>
				    <li class="filters__item" data-filter=".category-apps"><a class="filters__link force-black" href="#filter">Apps</a></li>
				    <li class="filters__item" data-filter=".category-backend"><a class="filters__link force-black" href="#filter">Backend</a></li>
			    </ul>
			    <input type="hidden" name="changemetoo"/>
			</div>
		</header>
		
	    <div class="flex-grid fitGrid js-sort">
		    <div class="gutter-sizer"></div>
		    <!-- Post -->
		    <article class="item-news triger-hl category-websites">
				<figure class="item-news__media js-block">
                    <a href="https://forms.gle/dyXYohVsK2ePBTt3A" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/reactjs-course.jpg" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Websites</div>
                            <h3 class="title title--h5">React.js</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block mb-3">
					<div class="date">Sr. Dev Erick Jerónimo</div>
					<p>Learn how to make amazing websites using React.js + Redux and improve your web skills.</p>
					<div class="row">
						<div class="col-6">	
							<pre>Tuesday & Thursday
17:30 - 19:00
Starting on August 18
Duration: 2 months
Price: Q300.00/month</pre>
						</div>
						<div class="col-6">
							<a class="btn btn-link inscribe-button"
							href="https://forms.gle/dyXYohVsK2ePBTt3A" target="_blank">Inscribe Here</a>
						</div>
					</div>
				</div>
			</article>
		    <!-- /Post -->
			
		    <!-- Post -->
		    <article class="item-news triger-hl category-apps">
				<figure class="item-news__media js-block">
                    <a href="https://forms.gle/L2Pt1XgryznoELTL6" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/android-course.jpg" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Apps</div>
                            <h3 class="title title--h5">Android</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block mb-3">
					<div class="date">Sr. Dev Alejandro Barrios</div>
					<p>Learn how to program Android Apps from Zero to Hero, using Java and Firebase.</p>
					<div class="row">
						<div class="col-6">	
							<pre>Saturday
09:00 - 12:00
Starting on August 15
Duration: 3 months
Price: Q300.00/month</pre>
						</div>
						<div class="col-6">
							<a class="btn btn-link inscribe-button"
							href="https://forms.gle/L2Pt1XgryznoELTL6" target="_blank">Inscribe Here</a>
						</div>
					</div>
				</div>
			</article>
		    <!-- /Post -->
			
		    <!-- Post -->
		    <article class="item-news triger-hl category-backend">
				<figure class="item-news__media js-block">
                    <a href="https://forms.gle/LieDo4Svh8usXzZS9" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/python-course.jpg" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Back-end</div>
                            <h3 class="title title--h5">Python</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block mb-3">
					<div class="date">Sr. Dev Arlich Conde</div>
					<p>Learn how to program Python, make API's and improve your skills using DJango and Flask Framework.</p>
					<div class="row">
						<div class="col-6">	
							<pre>Thursday & Friday
19:00 - 20:30
Starting on August 20
Duration: 2 months
Price: Q300.00/month</pre>
						</div>
						<div class="col-6">
							<a class="btn btn-link inscribe-button"
							href="https://forms.gle/LieDo4Svh8usXzZS9" target="_blank">Inscribe Here</a>
						</div>
					</div>
				</div>
			</article>
		    <!-- /Post -->
			
		    <!-- Post -->
		    <article class="item-news triger-hl category-backend">
				<figure class="item-news__media js-block">
                    <a href="https://forms.gle/D4WPF9HdJf7BG7X1A" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/database-course.jpg" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Back-end</div>
                            <h3 class="title title--h5">MySQL Database</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block mb-3">
					<div class="date">Sr. Dev Erick Jerónimo</div>
					<p>Learn how to create and administrate SQL Databases, with stored procedures, triggers and more using MySQL Database.</p>
					<div class="row">
						<div class="col-6">	
							<pre>Monday & Wednesday
17:30 - 19:00
Starting on August 17
Duration: 2 months
Price: Q300.00/month</pre>
						</div>
						<div class="col-6">
							<a class="btn btn-link inscribe-button"
							href="https://forms.gle/D4WPF9HdJf7BG7X1A" target="_blank">Inscribe Here</a>
						</div>
					</div>
				</div>
			</article>
		    <!-- /Post -->
			
		    <!-- Post -->
<!--		    <article class="item-news triger-hl category-backend">
				<figure class="item-news__media js-block">
                    <a href="https://resigt.com" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/nodejs-course.png" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Back-end</div>
                            <h3 class="title title--h5">Node.js</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block">
					<div class="date">Sr. Dev Alejandro Barrios</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel leo eget sapien pulvinar auctor. Suspendisse potenti. Nullam malesuada bibendum dapibus</p>
				</div>
			</article> -->
		    <!-- /Post -->
			
		    <!-- Post -->
<!--		    <article class="item-news triger-hl category-apps">
				<figure class="item-news__media js-block">
                    <a href="https://resigt.com" target="_blank" class="onHover trigger-plus">
                        <img class="item-news__image lazyload" src="assets/img/courses/reactnative-course.png" alt="Education">
                        <div class="onHover__details">
                            <div class="client">Apps</div>
                            <h3 class="title title--h5">React Native</h3>
                        </div>
                    </a>
                </figure>
				<div class="item-news__header js-block">
					<div class="date">Sr. Dev Erick Jerónimo</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel leo eget sapien pulvinar auctor. Suspendisse potenti. Nullam malesuada bibendum dapibus</p>
				</div>
			</article> -->
		    <!-- /Post -->
		</div>
	</div>
    <!-- /News -->
@endsection

@section('footer')
    @include('footer.footer')
@endsection