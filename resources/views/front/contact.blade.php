@extends('front.template')

@section('main')

<div class="noo-page-heading">
				<div class="container">
					<div class="noo-page-breadcrumb">
						<div class="breadcrumb-wrap">
 							<span><a href="#" class="home">Home</a></span><i>&#047;</i> <span><span>Contact</span></span>
 						</div>
					</div>
				</div> 
			</div>
			<div class="container-wrap">
				<div class="default-p container">
					<div class="row">
						<div class="col-md-12">
 							<div class="row row-fluid">
 								<div class="nocontainer">
									<div class="col-sm-12">
										<h1 class="text-center text-uppercase">contact us</h1>
										<p class="text-center">
											Find the nearest venues to your address or send us a message for further details about any events you&#8217;re interested in.
										</p>
									</div>
								</div>
							</div>
							<div class="row row-fluid">
								<div class="nocontainer contact-content">
									<div class="col-sm-6">
									{!! Form::open(['url' => 'contact', 'method' => 'post', 'role' => 'form']) !!}	
				
                                                                                <div class="row">

                                                                                        {!! Form::control('text', 6, 'name', $errors, trans('front/contact.name')) !!}
                                                                                        {!! Form::control('email', 6, 'email', $errors, trans('front/contact.email')) !!}
                                                                                        {!! Form::control('textarea', 12, 'message', $errors, trans('front/contact.message')) !!}
                                                                                        
                                                                                        {!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}

                                                                                </div>

                                                                        {!! Form::close() !!}

									</div>
									<div class="col-sm-6">
										<ul class="contact-info">
											<li>
												<span class="contact-title">VENUES</span>
												<i class="fa fa-map-marker"></i>
												Lahore, Punjab, Pakistan 
											</li>
											<li>
												<span class="contact-title">TELEPHONE</span>
												<i class="fa fa-phone"></i>
                                                                                                Pakistan: +92 322 6900450<br>
                                                                                                UK: +44 7885 823643
											</li>
											<li>
												<span class="contact-title">EMAIL</span>
												<i class="fa fa-envelope-o"></i>
												<a href="mailto:waleedanjumcheema@gmail.com">waleedanjumcheema@gmail.com</a>
											</li>
											<li>
												<span class="contact-title">WEBSITE</span>
												<i class="fa  fa-globe"></i>
												<a href="#">www.waleedcheema.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>  
					</div> 
				</div> 
			</div>




	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				

			</div>
		</div>
	</div>
@stop