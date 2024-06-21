<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RestoranVideo;

class RestoranVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = RestoranVideo::all();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'video' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('videos/restoran', $image_name);
            $requestData['video'] = $image_name;


        RestoranVideo::create($requestData);
        return redirect()->route('admin.videos.index')->with('seccess', 'Videos created saccessfuly');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RestoranVideo $video)
    {
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RestoranVideo $video)
    {
        $this->validate($request, [
            'video' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('videos/restoran', $image_name);
            $requestData['video'] = $image_name;


        $video->update($requestData);
        return redirect()->route('admin.videos.index')->with('seccess', 'Videos edited saccessfuly');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RestoranVideo $video)
    {
       $video->delete();
       return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfuly');
    }
}
