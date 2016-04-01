@extends('front.template')

@section('main')
<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="{!!route('home')!!}" class="home">Home</a></span><i>&#047;</i> <span><span>{!!$v->title!!}</span></span>
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
									<h3 class="single-album-title">{!!$v->title!!}</h3>
									<div class="row">
										<div class="album-intro col-xs-12">
                                                                                    {!!$v->dailymotion!!}
											
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
															<span>{!!$v->rDate!!}</span>
														</div>
														<div class="meta-genre">
															Genre:
															<span><a href="#">{!!$v->genre!!}</a></span>
														</div>
														<div class="meta_artist">
															Produced:
															<span><a href="#">{!!$v->producer!!}</a></span>
														</div>
														
												</div>
											</div>
											<div class="col-sm-8">
												<div class="summary entry-summary">
													<h1 class="entry-title">{!!$v->title!!}</h1>
	                                        		<span class="author"><a href="#">Waleed Cheema</a></span>
													<div class="album-description">
                                                                                                            {!!$v->details!!}
                                                                                                        </div>
													<div class="album-tag">
														<span class="tagged_as">Tag: <a href="#">{!!$v->genre!!}</a></span>
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