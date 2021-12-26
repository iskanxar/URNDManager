<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;



class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::where('role_id', '=', 3)->get();
        return view('users.indexStaff', compact('staffs'));
    }

}
