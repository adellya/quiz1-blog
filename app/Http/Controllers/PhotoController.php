<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'text' => 'required',
        ]);

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');

            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $img = Image::make($photo)->save(public_path('/uploads/' . $filename));

            $medium = 'medium_' . time() . '.' . $photo->getClientOriginalExtension();
            $img = Image::make($photo)->fit(600, 360)->save(public_path('/uploads/' . $medium));

            $thumbnail = 'thumbnail_' . time() . '.' . $photo->getClientOriginalExtension();
            $img = Image::make($photo)->fit(150)->save(public_path('/uploads/' . $thumbnail));

            // $img->title = $filename;
        }

        $img->save();

        return redirect()->route('photos.index')
            ->with('success','Photo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
