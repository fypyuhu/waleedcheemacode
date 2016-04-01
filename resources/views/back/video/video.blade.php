@extends('front.template')

@section('main')
	<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="{!!route('home')!!}" class="home">Home</a></span><i>&#047;</i> <span><span>Video</span></span>
 						</div>
					</div>
				</div> 
			</div>
			<div class="container-wrap">
				<div class="main-content container">
					<div class="row">
						<div class="noo-main noo-archive-album">
							<div class="noo_albums-wrap clearfix">
								<ul class="noo_albums">
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock17.jpg" alt="rock17"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Happy music day</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Pop</a><a href="#">Rock</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock17.jpg/" alt=\&quot;rock17\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock16.jpg" alt="rock16"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Live on Letterman</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Dance</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock16.jpg/" alt=\&quot;rock16\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Live on Letterman&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock2.jpg" alt="rock2"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Hollywood bowl</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Jazz</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock2.jpg/" alt=\&quot;rock2\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Hollywood bowl&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock3.jpg" alt="rock3"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Papagayo Beach Club</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Jazz</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock3.jpg/" alt=\&quot;rock3\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Papagayo Beach Club&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock4.jpg" alt="rock4"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Roseland Ballroom</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Jazz</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock4.jpg/" alt=\&quot;rock4\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Roseland Ballroom&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
														<a href="#">
															<img width="500" height="700" src="images/album/rock9.jpg" alt="rock9"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="#">Happy music day</a>
														</h3>
														<div class="noo_album-category">
															<a href="#">Jazz</a>
														</div>
													</div>
													<div class="noo_album-loop-actions">
														<a href="#"><i class="fa fa-link"></i> Detail</a>
														<a href="#" data-songs='[
															{
																&quot;id&quot;:&quot;album_1&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Maroon 5 ft Wiz Khalifa&lt;\/a&gt;&quot;,
					
																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Payphone&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_2&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Engelbert Humperdinck&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Quando-Quando-Engelbert-Humperdinck-Engelbert-Humperdinck.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Quando Quando&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_3&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Modern Talking&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/No-Face-No-Name-No-Number-Modern-Talking.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;No Face No Name No Number&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_4&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">The Wanted&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Glad-You-Came-The-Wanted.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Glad You Came&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_5&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Helloween<//a>",

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Forever-And-One-Helloween.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Forever And One&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;
															},
															{
																&quot;id&quot;:&quot;album_6&quot;,

																&quot;artist&quot;:&quot;&lt;a href=http://tk-themes.net/"javascript:void(0)/">Shane Filan&lt;\/a&gt;&quot;,

																&quot;file&quot;:&quot;http:\/\/wp.nootheme.com\/wemusic\/wp-content\/uploads\/2015\/06\/Beatiful-In-White-Shane-Filan.mp3&quot;,

																&quot;thumb&quot;:&quot;&lt;img width=\&quot;150\&quot; height=\&quot;150\&quot; src=http://tk-themes.net/"images//album//rock9.jpg/" alt=\&quot;rock9\&quot; \/&gt;&quot;,

																&quot;name&quot;:&quot;Beatiful In White&quot;,

																&quot;url&quot;:&quot;#&quot;,

																&quot;album&quot;:&quot;Happy music day&quot;

															}]' class="add-to-playlist-btn">
															<i class="fa fa-plus"></i> Add to Playlist
														</a>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
								</ul>
							</div>
							<div class="pagination list-center">
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="#">2</a>
								<span class="page-numbers dots">…</span>
								<a class="page-numbers" href="#">4</a>
								<a class="next page-numbers" href="#">
									<i class="fa fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    
@stop