<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'job' => 'required',
         ]);

         $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/team', $image_name);
            $requestData['image'] = $image_name;


        Team::create($requestData);
        return redirect()->route('admin.team.index')->with('seccess', 'Team created saccessfuly');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
            'job' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $file->move('images/team', $image_name);
                $requestData['image'] = $image_name;
            } else {
                return redirect()->back()->withErrors(['image' => 'The uploaded file is not valid.'])->withInput();
            }
        }

        $team->update($requestData);
        return redirect()->route('admin.team.index')->with('success', 'Team edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team deleted successfully');
    }
}
