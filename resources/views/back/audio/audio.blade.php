@extends('back.template')
@section('head')

<style type="text/css">
  
  .badge {
    padding: 1px 8px 1px;
    background-color: #aaa !important;
  }

</style>

@stop

@section('main')
	  @include('back.partials.entete', ['title' => 'Audio' . link_to_route('audio.create', 'Add Audio', [], ['class' => 'btn btn-info pull-right']), 'icone' => 'audio', 'fil' => 'Audios'])
 
	@if(session()->has('ok') && session()->has('message'))
            @include('partials/error', ['type' => 'success', 'message' => session('message')])
	@endif
        
    	<div class="table-responsive">
		
			  @include('back.audio.table')

	<div class="pull-right link"></div>

    
@stop   