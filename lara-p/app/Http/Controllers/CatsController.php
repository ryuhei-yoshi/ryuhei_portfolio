<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Cat::query();

        if(!empty($keyword)){
            $query->where('title', 'LIKE', "%{$keyword}%")
                        ->orWhere('old', 'LIKE', "%{$keyword}%");
        }

        $cats = $query->orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', ['cats' => $cats, 'keyword' => $keyword]);
    }
    public function adminIndex()
    {
        $cats = Cat::orderBy('created_at', 'desc')->paginate(9);
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
        $validatedData = $request->validate([
            'title' => 'required|unique:cats|max:25',
            'area' => 'required',
            'adress' => 'required',
            'category' => 'required|max:25',
            'old' => 'required|max:25',
            'image_url' => 'required',
        ]);
        $cat = new Cat();
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
        $cat->fill($data)->save();
        return redirect('/admin/home');
    }
}
