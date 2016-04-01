	@extends('back.template')

	@section('main')

	 <!-- Entête de page -->
	  @include('back.partials.entete', ['title' => 'Create Audio', 'icone' => 'user', 'fil' => link_to('admin/audio', 'audio') . ' / ' . 'Creation'])

		<div class="col-sm-12">
			{!! Form::open(['url' => 'audio', 'method' => 'post', 'class' => 'form-horizontal panel' ,'files'=>true ]) !!}
				@include('back.partials.selectDate',['title' => 'Release Date','name' => 'rDate'] )
                                 
                                {!! Form::control('text', 0, 'title', $errors, 'Title') !!}
				{!! Form::control('textarea', 0, 'details', $errors, 'Details') !!}
				
                                
                                {!! Form::selection('sponser', $sponsers, null, 'Sponser') !!}
                                
				{!! Form::selection('genre', $generes, null, 'Genre') !!}
                                
				{!! Form::selection('producer', $producers, null,'Producer') !!}

                                 <label>Thumb</label>
                                 {!! Form::file('thumb') !!}
                                    <p class="errors">{!!$errors->first('thumb')!!}</p>
                                  @if(\Session::has('error'))
                                    <p class="errors">{!! \Session::get('error') !!}</p>
                                  @endif
                                 
                                  <label>Audio</label>
                                 {!! Form::file('audio') !!}
                                    <p class="errors">{!!$errors->first('audio')!!}</p>
                                  @if(\Session::has('error'))
                                    <p class="errors">{!! \Session::get('error') !!}</p>
                                  @endif
                                  
                                  
                                 
			{!! Form::submit(trans('front/form.send')) !!}

				{!! Form::close() !!}
		</div>

	@stop