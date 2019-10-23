<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

}
