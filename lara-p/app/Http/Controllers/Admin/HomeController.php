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
        $catsCount = Cat::where('admin_id', Auth::user()->id)->count();
        $cats = Cat::where('admin_id', Auth::user()->id)->paginate(9);
        return view('admin_home', ['cats' => $cats, 'catsCount' => $catsCount,]);
    }
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.show', ['admin' => $admin]);
    }
}
