	@extends('back.template')

	@section('main')

	 <!-- Entête de page -->
	  @include('back.partials.entete', ['title' => 'Create Gallery', 'icone' => 'user', 'fil' => link_to('admin/gallery', 'gallery') . ' / ' . 'Creation'])

		<div class="col-sm-12">
			{!! Form::open(['url' => 'gallery', 'method' => 'post', 'class' => 'form-horizontal panel' ,'files'=>true ]) !!}
			         
                                {!! Form::control('text', 0, 'title', $errors, 'Title') !!}
				{!! Form::control('textarea', 0, 'details', $errors, 'Details') !!}
				
                        
                                 <label>Image </label>
                                 {!! Form::file('thumb') !!}
                                    <p class="errors">{!!$errors->first('thumb')!!}</p>
                                  @if(\Session::has('error'))
                                    <p class="errors">{!! \Session::get('error') !!}</p>
                                  @endif
                                 
                                  
                                  
                                 
			{!! Form::submit(trans('front/form.send')) !!}

				{!! Form::close() !!}
		</div>

	@stop