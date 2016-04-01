<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Uploader;

class AudioController extends Controller
{
     public function __construct()
	{
		$this->middleware('admin', ['except' => ['index', 'show']]);
		$this->middleware('ajax', ['only' => 'update']);
	}
        
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
        
        
    public function index()
    {
        $as = Audio::all();
       return view('front.audio.audio',compact('as'));
        //  
    }
    public function adminIndex(){
       return view('back.audio.audio');
        
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    
    public function sponsers(){
        return ['Waleed Cheema','sponser1','sponser2'];
        
    }
    public function producers(){
        return ['Waleed Cheema','producer1','producer2'];
        
    }
    public function generes(){
        return ['DANCE','Pop','Romantic'];
        
    }
    public function create()
    {
        $sponsers = $this->sponsers();
        $producers = $this->producers();
        $generes = $this->generes();
        //
        return view('back.audio.create',compact('sponsers','producers','generes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $fredirect = redirect(route('audio.create'));
        $sredirect = redirect(route('admin.audio.index'));
        
        $uploader = new Uploader();
        $response = $uploader->upload('thumb', $fredirect,$sredirect,'thumb');
        if($uploader->isFail()){
           return $response;
        }
        $thumb = $uploader->pathToFile;
        
        $response = $uploader->upload('audio', $fredirect,$sredirect,'audio');
        if($uploader->isFail()){
           return $response;    
        }
        $dlink = $uploader->pathToFile;
        
        Audio::insert([
            'title' => $request->title,
            'details' => $request->details,
            'producer' => $this->producers()[$request->producer],
            'sponser' => $this->sponsers()[$request->sponser],
            'genre' => $this->generes()[$request->genre],
            'rDate' => $request->rDate,
            'thumb' => $thumb,
            'dlink' => $dlink
            
        ]);
        return redirect(route('audio.create'))->with("Sucess");
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $a = Audio::where('id',$id)->first();
        return view('front.audio.show',compact('a'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
