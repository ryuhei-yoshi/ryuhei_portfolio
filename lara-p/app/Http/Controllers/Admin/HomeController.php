<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Cat;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = Cat::orderBy('created_at', 'desc')->paginate(5);

        return view('admin_home', ['cats' => $cats,]);
    }
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.show', ['admin' => $admin]);
    }
}
