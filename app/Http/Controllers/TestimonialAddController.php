<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialAddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    //  dd($request->all());

    $this->validate($request, [
        'user_name' => 'required',
        'image' => 'required',
        'user_job' => 'required',
        'description' => 'required',
     ]);

     $requestData = $request->all();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $image_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move('images/testimonial', $image_name);
        $requestData['image'] = $image_name;

        Testimonial::create($requestData);
        return redirect()->route('booking');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
