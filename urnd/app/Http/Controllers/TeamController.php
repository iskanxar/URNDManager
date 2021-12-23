<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Team;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = User::where('role_id', '=', 3)->get();
        $leads = User::where('role_id', '=', 2)->get();
        return view('teams.create',['staffs'=>$staffs],['leads'=>$leads]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tname' => 'required',  

            'leader_name' => 'required',

            'member1_name' => 'required',

            'member2_name' => 'required',

            'member3_name' => 'required',

        ]);

        $team = new Team([
            'tname'         =>  $request->get('tname'),
            'leader_name'   =>  $request->get('leader_name'),
            'member1_name'   =>  $request->get('member1_name'),
            'member2_name'   =>  $request->get('member2_name'),
            'member3_name'   =>  $request->get('member3_name'),
        ]);

        $team->save();

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view ('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $staffs = User::where('role_id', '=', 3)->get();
        $leads = User::where('role_id', '=', 2)->get();
        return view('teams.edit', compact('team', 'staffs', 'leads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->member1_name = $request->member1_name;
        $team->member2_name = $request->member2_name;
        $team->member3_name = $request->member3_name;
        $team->save();
        
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
