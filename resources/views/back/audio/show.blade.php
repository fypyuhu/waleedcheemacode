@extends('back.template')

@section('main')
<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="{!!route('home')!!}" class="home">Home</a></span><i>&#047;</i> <span><span>Single Album</span></span>
 						</div>
					</div>
				</div> 
			</div>
			<div class="container-wrap single-album">
				<div class="main-content container">
					<div class="row">
						<div class="col-md-12">
							<div class="noo-main single single-noo_album">
								<div class="noo_album">
									<h3 class="single-album-title">single album</h3>
									<div class="row">
										<div class="album-intro col-xs-12">
											<div class="album-intro-wrap">
												<div class="images">
													<img width="600" height="450" src="{!!URL::to('/')!!}/images/album/album-detail.jpg" alt=""/>
													<div class="album-purchase">
														<a href="#">iTunes</a>
														<a href="#">Amazon</a>
														<a href="#">Beatport</a>
													</div>
												</div>
												<div class="album-media-player">
													<h3 class="tracklist-title">Tracklist</h3>
													<div class="single-album-playlist">
														<ul>
															<li 
																id="album_1"
																data-id="album_1"
																data-artist="&lt;a href=_.html#&quot;&gt;Jenifer Mueller&lt;/a&gt;" 
																data-file="http://wp.nootheme.com/wemusic/wp-content/uploads/2015/06/Payphone-Maroon-5-ft-Wiz-Khalifa.mp3" data-thumb="&lt;img width=&quot;768&quot; height=&quot;1000&quot; src=_images/album/rock16.html alt=&quot;rock16&quot; /&gt;" 
																data-name="Payphone" 
																data-url="#" 
																data-album="Live on Letterman">
																<a href="javascript:void(0)" class="noodata-play">
																	<span class="number">1.</span>
																	<span class="current-active-play">
																		<i class="fa fa-play"></i>
																	</span>
																	Payphone
																	<small> - Maroon 5 ft Wiz Khalifa</small>
																</a>
													            <span class="album-meta">
													            	<a href="#" target="_blank">
	                                                            		<img class="drak" src="{!!URL::to('/')!!}/images/album-meta/apple.png" alt="" />
	                                                            		<img class="light" src="{!!URL::to('/')!!}/images/album-meta/apple-light.png" alt="" />
	                                                        		</a>
	                                                        		<a href="#" target="_blank">
			                                                            <img class="drak" src="{!!URL::to('/')!!}/images/album-meta/amazon.png" alt="" />
			                                                            <img class="light" src="{!!URL::to('/')!!}/images/album-meta/amazon-light.png" alt="" />
	                                                        		</a>
	                                                        		<a href="#" target="_blank">
			                                                            <img class="drak" src="{!!URL::to('/')!!}/images/album-meta/beatport.png" alt="" />
			                                                            <img class="light" src="{!!URL::to('/')!!}/images/album-meta/beatport-light.png" alt="" />
	                                                        		</a>
	                                                        		<a href="#" target="_blank">
	                                                            		<img class="drak" src="{!!URL::to('/')!!}/images/album-meta/download.png" alt="" />
	                                                            		<img class="light" src="{!!URL::to('/')!!}/images/album-meta/download-light.png" alt="" />
	                                                        		</a>
	                                                        		<a href="#" target="_blank">
			                                                            <img class="drak" src="{!!URL::to('/')!!}/images/album-meta/soundcloud.png" alt="" />
			                                                            <img class="light" src="{!!URL::to('/')!!}/images/album-meta/soundcloud-light.png" alt="" />
	                                                        		</a>
	                                                            </span>
															</li>									
															
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="album-summary col-xs-12">
											<div class="row">
												<div class="col-sm-4">
													<div class="meta-summary">
														<div class="meta-artist">
															<span><a href="#">Jenifer Mueller</a></span>
														</div>
														<div class="meta-release-date">
															Release date:
															<span>June 9, 2015</span>
														</div>
														<div class="meta-genre">
															Genre:
															<span><a href="#">Dance</a></span>
														</div>
														<div class="meta_artist">
															Produced:
															<span><a href="#">John Doe</a></span>
														</div>
														<div class="album-share content-social">
														<a href="#share" class="noo-share noo-facebook" title="Share on Facebook">
															<span class="title-shared">Share on Facebook</span>
															<i class="fa fa-facebook"></i>
														</a>
														<a href="#share" class="noo-share noo-twitter" title="Share on Twitter">
															<span class="title-shared">Share on Twitter</span>
															<i class="fa fa-twitter"></i>
														</a>
														<a href="#share" class="noo-share noo-google-plus" title="Share on Google+">
															<span class="title-shared">Share on Google+</span>
															<i class="fa fa-google-plus"></i>
														</a>
														<a href="#share" class="noo-share noo-pinterest" title="Share on Pinterest">
															<span class="title-shared">Share on Pinterest</span>
															<i class="fa fa-pinterest"></i>
														</a>
														<a href="#share" class="noo-share noo-linkedin" title="Share on LinkedIn">
															<span class="title-shared">Share on LinkedIn</span>
															<i class="fa fa-linkedin"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="summary entry-summary">
													<h1 class="entry-title">Live on Letterman</h1>
	                                        		<span class="author"><a href="#">Jenifer Mueller</a></span>
													<div class="album-description">
														Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
													</div>
													<div class="album-tag">
														<span class="tagged_as">Tag: <a href="#">dance</a></span>
													</div>
												</div><!-- .summary -->
											</div>
										</div>
									</div>
								</div>
							</div>
                    		<div class="similar_album">
                        		<h4 class="similar_title">similar<span> album</span></h4>
                        			<div class="row">
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
										</ul>
                        			</div>
			                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>

@stop