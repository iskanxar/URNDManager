<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $lead)
    {
        $this->authorize('create');
        $lead = User::where('role_id', '=', 2)->get();
        return view('projects.create',['lead'=>$lead]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create');

        $this->validate($request, [
            'pname' => 'required', 

            'client' => 'required',

            'leader_name' => 'required',

            'ptype' => 'required',

            'start_date' => 'required',

            'end_date' => 'required',

            'duration' =>   'required',

            'cost' => 'required', 

            'progress' =>   'required', 

            'status' => 'required', 

            'leader_name' => 'required',

        ]);

        $project = new Project([
            'pname'         =>  $request->get('pname'),
            'ptype'         =>  $request->get('ptype'),
            'client'         =>  $request->get('client'),
            'start_date'    =>  $request->get('start_date'),
            'end_date'      =>  $request->get('end_date'),
            'duration'      =>  $request->get('duration'),
            'cost'          =>  $request->get('cost'),
            'progress'      =>  $request->get('progress'),
            'status'        =>  $request->get('status'),
            'leader_name'   =>  $request->get('leader_name'),
        ]);

        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $project->progress = $request->progress;
        $project->status = $request->status;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete');

        $project->delete();
        return redirect()->route('projects.index');
    }
}
