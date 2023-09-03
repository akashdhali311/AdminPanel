<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\AdminController;

class AdminController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }


    public function logout()
    {
        return view('Auth.passwords.adminlogin');
    }
    public function admindashboard()
    {
       
        return view('Container.admindashboard');
    }
    public function static_navigation()
    {
        return view('Container.Layouts.static-navigation');
    }
    public function sidenav()
    {
        return view('Container.Layouts.sidenav-light');
    }
    public function charts()
    {
        return view('Container.charts');
    }
    public function tables()
    {
        return view('Container.tables');
    }
}
