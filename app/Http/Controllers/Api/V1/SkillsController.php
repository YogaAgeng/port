<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\skills;
use App\Http\Requests\StoreskillsRequest;
use App\Http\Requests\UpdateskillsRequest;
use App\Http\Controllers\Controller;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Skills::paginate();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreskillsRequest $request)
    {
        Skills::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(skills $skills)
    {
        return Skills::find($skills->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = skills::find($id);
        $skillsE = skills::all();
        return view('welcome')->with(['skill' => $skill, 'skillsE' => $skillsE]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $skill = skills::find($id)->first();
        $skillsE = skills::all();
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->type = $request->type;
        $skill->save();

        return redirect('/')->with(['skill' => $skill, 'skillsE' => $skillsE]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = skills::whereId($id)->first();
        $skill->delete();
        return redirect('/');
    }
}
