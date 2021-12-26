<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;



class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = User::where('role_id', '=', 1)->get();
        return view('users.indexManager', compact('managers'));
    }
}
