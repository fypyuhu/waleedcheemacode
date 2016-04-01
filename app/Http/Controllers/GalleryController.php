<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    
    public function __construct()
	{
		$this->middleware('admin', ['except' => ['index', 'show']]);
		$this->middleware('ajax', ['only' => 'update']);
	}
    /**
     * 
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $gs = \App\Gallery::all();
        
        return view('front.gallery.gallery',compact('gs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        return view('back.gallery.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
      $sredirect=  $fredirect = redirect(route('gallery.create'));
        
        $uploader = new Uploader();
        $response = $uploader->upload('thumb', $fredirect,$fredirect,'thumb');
        if($uploader->isFail()){
           return $response;
        }
        $image = $uploader->pathToFile;
        
        
        Gallery::insert([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $image
            
        ]);
        return redirect(route('gallery.index'));
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
        
        return view('front.gallery.show');
        //
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
