<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index' , ['admins' => Admin::all()]);
    }




    public function user()
    {
        return view('admin.user', ['admins' => Admin::all()] );
    }

}
