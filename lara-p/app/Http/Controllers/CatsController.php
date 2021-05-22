<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller
{
    public function index()
    {
        $cats = Cat::orderBy('created_at', 'desc')->paginate(5);
        return view('welcome', ['cats' => $cats]);
    }
    public function adminIndex()
    {
        $cats = Cat::orderBy('created_at', 'desc')->paginate(5);
        return view('admin_home', ['cats' => $cats]);
    }

    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('cats.cats_show', ['cat' => $cat]);
    }

    public function create()
    {
        return view('cats.cats_create');
    }

    public function store(Request $request)
    {
        $catsImage = $request->image_url;
        $catsImagePath = $catsImage->store('public/uploads');
        $data = [
            'title' => $request->title,
            'area' => $request->area,
            'adress' => $request->adress,
            'category' => $request->category,
            'old' => $request->old,
            'image_url' => $catsImagePath,
        ];
        Cat::create($data);
        return redirect('/');
    }
}
