<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;



class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders = User::where('role_id', '=', 2)->get();
        return view('users.indexLeader', compact('leaders'));
    }
}
