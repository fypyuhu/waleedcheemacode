<!doctype html>
<html lang="en-US">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
 		<link rel="shortcut icon" href="{!!URL::to('/')!!}/images/favicon.png"/>
		<title>Home | WeMusic - Music Band Event</title>

		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/widget-calendar-full.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/jquery.mb.YTPlayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/owl.carousel.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/owl.theme.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/nivo-lightbox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/nivo-default.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/mediaelementplayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{!!URL::to('/')!!}/css/layout.css' type='text/css' media='all'/>

		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body class="page-menu-transparent">
		<!--preloader-->
        
    <!--    <div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object"></div>
					<div class="object"></div>
                                        <div class="object"></div>
                                        <div class="object"></div>
                                        <div class="object"></div>
                                        <div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
                                        <div class="object"></div>
                                        <div class="object"></div>
                                        
				</div>
			</div> 
		</div>
        <!--end preloader-->
		<div class="site">
			<header class="noo-header" id="noo-header">
				<div class="navbar-wrapper">
					<div class="navbar navbar-default navbar-static-top">
						<div class="container">
							<div class="navbar-header">
								<h1 class="sr-only">Home</h1>
								<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
									<span class="sr-only">Navigation</span>
									<i class="fa fa-bars"></i>
								</a>
								<a href="#" class="mobile-minicart-icon">
									<i class="fa fa-shopping-cart"></i><span>0</span>
								</a>
								<a href="{!!route('home')!!}" class="navbar-brand">
									<img class="noo-logo-img noo-logo-normal" src="{!!URL::to('/')!!}/images/logo1.png" alt="">
									<img class="noo-logo-img noo-logo-floating" src="{!!URL::to('/')!!}/images/logo1.png" alt="">
								</a>
							</div>  
							<nav class="collapse navbar-collapse noo-navbar-collapse">
								
                                                                <ul class="navbar-nav sf-menu">
									<li class="menu-item menu-item-has-children  @if(Route::currentRouteName()== 'home' ) current-menu-item @endif">
										<a href="{!!route('home')!!}">Home</a>
										
									</li>
									<li class="menu-item-has-children @if(Route::currentRouteName()== 'audio.index' ) current-menu-item @endif">
										<a href="{!!route('audio.index')!!}">Audio</a>
										
									</li>
                                                                        <li class="menu-item-has-children @if(Route::currentRouteName()== 'video.index' ) current-menu-item @endif">
										<a href="{!!route('video.index')!!}">video</a>
										
									</li>
                                                                        <li class="menu-item-has-children @if(Route::currentRouteName()== 'gallery.index' ) current-menu-item @endif">
										<a href="{!!route('gallery.index')!!}">Gallery</a>
										
									</li>
                                                                        <li class="menu-item-has-children @if(Route::currentRouteName()== 'about' ) current-menu-item @endif">
										<a href="{!!route('about')!!}">About</a>
										
									</li>
                                                                        
									
									
									<li class="menu-item-has-children @if(Route::currentRouteName()== 'contact.create' ) current-menu-item @endif">
                                                                            <a href="{!!route('contact.create')!!}">Contact</a></li>
								
								</ul>


							</nav>  
						</div>  
					</div>  
				</div>
			</header>
			<div class="container-wrap">
                            @yield('main')
			</div> 
			<footer class="colophon site-info">
				<div class="colophon wigetized">
					<div class="background-footer"></div>
					<div class="container">
						 
						<div class="noo-footer-bottom">
							<div class="widget widget_noo_infomation">
								<ul class="noo-infomation">
									<li>
										<span class="fa fa-map-marker infomation-left"></span>
                                                                                <address>Lahore, Punjab, Pakistan </address>
									</li>
									<li class="info-phone">
										<span class="fa fa-phone infomation-left"></span>
										<span> Pakistan: +92 322 6900450 
                                                                                      <br> UK:  +44 7885 823643
                                                                                </span>
									</li>
									<li class="info-mail">
										<span class="fa fa-envelope-o infomation-left"></span>
										<span><a href="mailto:waleedanjumcheema@gmail.com">waleedanjumcheema@gmail.com</a></span>
									</li>
								</ul>
							</div>
							<div class="widget widget_noo_social">
								<div class="noo_social">
									<div class="social-all">
										<span class="footer-social">
											<span class="social-name">
												Follow on facebook
											</span>
											<a href="https://www.facebook.com/waleedcheema.official" class="fa fa-facebook"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on google-plus
											</span>
											<a href="#" class="fa fa-google-plus"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on twitter
											</span>
											<a href="#" class="fa fa-twitter"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on youtube
											</span>
											<a href="#" class="fa fa-youtube"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on skype
											</span>
											<a href="" class="fa fa-skype"></a>
										</span>
										<span class="footer-social">
											<span class="social-name">
												Follow on linkedin
											</span>
											<a href="#" class="fa fa-linkedin"></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>  
				</div>  
			</footer>  
		</div>  
		<div class="footer-player">
			<div class="album-playlist">
				<ul>
					<li class="album-playlist-title">
						<span class="playlist-play">
							Play
						</span>
						<span class="playlist-release">
							Play
							<small>(Label)</small>
						</span>
						<span class="playlist-tract">
							Track title
							<small>(Track author)</small>
						</span>
						<span class="playlist-page">
							Page
						</span>
						<span class="playlist-delete">
							Delete
						</span>
					</li>
					
                                         @yield('playlist')   
                                        
                                     
					
				</ul>
			</div>
                    
                    
			<div class="album-player">
				<div class="album-player-embed">
					<span class="contro-album-player contro-down-player"><i class="fa fa-angle-down"></i></span>
					<span class="contro-album-player contro-up-player"><i class="fa fa-angle-up"></i></span>
					<audio class="album-audio-embed">
						<source src="/audio/janyq/mp3.mp3" type="audio/mpeg"/>
					</audio>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/modernizr-2.7.1.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.carouFredSel-6.2.1.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/hoverIntent-r7.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/main.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/mediaelement-and-player.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/player.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.plugin.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.countdown.min.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/jquery.parallax.js'></script>
		<script type='text/javascript' src='{!!URL::to('/')!!}/js/owl.carousel.min.js'></script>

		<script type="text/javascript">
            var $height_w   = jQuery(window).height();
	        jQuery('.noo-countdown').css('height',$height_w+'px');
	        jQuery(window).resize(function(){
                var $height_w = jQuery(window).height();
                jQuery('.noo-countdown').css('height',$height_w+'px');
	        });
            jQuery(function () {
                jQuery('.full-background li:first-child').show();
                var myVar = '';
                clearInterval(myVar);
                myVar = setInterval(function(){
                    jQuery('.full-background li:first-child').fadeOut(1200).next('li').fadeIn(1200).end().appendTo('.full-background');
                },3500);
	            
	                                
	            austDay = new Date(2016, 1  -1,  8);
                    
	            jQuery('#defaultCountdown').countdown({until: austDay});
	            jQuery('#year').text(austDay.getFullYear());
            });

        </script>
	</body>

</html>