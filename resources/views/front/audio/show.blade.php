@extends('front.template')

@section('main')
<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="{!!route('home')!!}" class="home">Home</a></span><i>&#047;</i> <span><span>{!!$a->title!!}</span></span>
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
									<h3 class="single-album-title">{!!$a->title!!}</h3>
									<div class="row">
										<div class="album-intro col-xs-12">
											<div class="album-intro-wrap">
												<div class="images">
                                                                                                    <img width="100%" height="450" src="{!!URL::to('/')!!}/{!!$a->thumb!!}" alt=""/>
													
												</div>
												<div class="album-media-player">
													<h3 class="tracklist-title">Tracklist</h3>
													<div class="single-album-playlist">
														<ul>
															<li 
																id="album_1"
																data-id="album_1"
																data-artist="&lt;a href=_.html#&quot;&gt;Jenifer Mueller&lt;/a&gt;" 
																data-file="{!!URL::to('/')!!}/{!!$a->dlink!!}" data-thumb="&lt;img width=&quot;768&quot; height=&quot;1000&quot; src=_images/album/rock16.html alt=&quot;rock16&quot; /&gt;" 
                                                                                                                                data-name="{!!$a->title!!}" 
																data-url="#" 
																data-album="{!!$a->title!!}">
																<a href="javascript:void(0)" class="noodata-play">
																	<span class="number">1.</span>
																	<span class="current-active-play">
																		<i class="fa fa-play"></i>
																	</span>
																	{!!$a->title!!}
																	<small> - WaleedCheema</small>
																</a>
													            <span class="album-meta">
										
                                                                                                                        <a href="{!!URL::to('/')!!}/{!!$a->dlink!!}" target="_blank">
	                                                            		<img class="drak" src="{!!URL::to('/')!!}/images/album-meta/download.png" alt="" />
	                                                            		<img class="light" src="{!!URL::to('/')!!}/images/album-meta/download-light.png" alt="" />
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
															<span><a href="#">Waleed Cheema</a></span>
														</div>
														<div class="meta-release-date">
															Release date:
															<span>{!!$a->rDate!!}</span>
														</div>
														<div class="meta-genre">
															Genre:
															<span><a href="#">{!!$a->genre!!}</a></span>
														</div>
														<div class="meta_artist">
															Produced:
															<span><a href="#">{!!$a->producer!!}</a></span>
														</div>
														
												</div>
											</div>
											<div class="col-sm-8">
												<div class="summary entry-summary">
													<h1 class="entry-title">{!!$a->title!!}</h1>
	                                        		<span class="author"><a href="#">Jenifer Mueller</a></span>
													<div class="album-description">
													{!!$a->details!!}
                                                                                                        </div>
													<div class="album-tag">
														<span class="tagged_as">Tag: <a href="#">{!!$a->genre!!}</a></span>
													</div>
												</div><!-- .summary -->
											</div>
										</div>
									</div>
								</div>
							</div>
                    		
							</div>
						</div>
					</div>
				</div>
			</div>

@stop

@section('playlist')


<li class="album-playlist-item" data-thumb="&lt;img width=&quot;150&quot; height=&quot;150&quot; src=_images/album/rock16.html alt=&quot;rock16&quot; /&gt;" data-name="{!!$a->title!!}" data-artist="{!!$a->title!!}">
						<span class="playlist-play">
                                                    <a href="{!!$a->dlink!!}"><i class="fa fa-play"></i></a>
						</span>
						<span class="playlist-release">
							<a href="#">{!!$a->title!!}</a>
						</span>
						<span class="playlist-tract">
							<a href="#">{!!$a->title!!}</a>
							<small><a href="javascript:void(0)">Waleed Cheema</a></small>
						</span>
						<span class="playlist-page">
							<a href="#"><i class="fa fa-share"></i></a>
						</span>
						<span class="playlist-delete">
							<a href="#"><i class="fa fa-times"></i></a>
						</span>
					</li>

@stop
