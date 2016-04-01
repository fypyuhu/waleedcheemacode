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
								@foreach($videos as $v)
                                                                    <li class="col-md-4 col-sm-6">
										<div class="noo_album-container">
											<figure>
												<div class="noo_album-wrap">
													<div class="noo_album-images">
                                                                                                            <a href="/video/{!!$v->id!!}">
                                                                                                                <img width="500" height="700" src="/uploads/thumb/{!!$v->thumb!!}" alt="rock17"/>
														</a>
													</div>
												</div>
												<figcaption>
													<div class="noo_album-info">
														<h3 class="noo_album_title">
															<a href="/video/{!!$v->id!!}">{!!$v->title!!}</a>
														</h3>
														<div class="noo_album-category">
															<a href="/video/{!!$v->id!!}">{!!$v->genre!!}</a>
														</div>
													</div>
													
												</figcaption>
											</figure>
										</div>
									</li>
								@endforeach
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