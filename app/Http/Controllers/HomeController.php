<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $team= Home::all();
        return view('admin.home.index',compact('team'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);

        Home::create([
            'name_uz' => $request->input('name_uz'),
            'name_ru' => $request->input('name_ru'),
            'name_en' => $request->input('name_en'),
            'content_uz' => $request->input('content_uz'),
            'content_ru' => $request->input('content_ru'),
            'content_en' => $request->input('content_en'),
            'image' => 'storage/images/' . $imageName,
        ]);

        return redirect()->route('home.index')->with('success','Mofiqayatli qoshildi');

    }

    public function edit(string $id)
    {
        $tame = Home::findOrFail($id);
        return view('admin.home.edit',compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Home::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $tame->image = $imageName;
        }

        $tame->update($request->except('image'));

        return redirect()->route('home.index')->with('success', 'Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Home::findOrFail($id);

        return view('admin.home.show',compact('show'));
    }

    public function destroy(string $id)
    {
        $tame = Home::findOrFail($id);

        $tame->delete();

        return redirect()->route('home.index')->with('success','mofaqiyatli ochirildi');

    }

//    public function uploadImage(Request $request)
//    {
//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
//        ]);
//
//        $image = $request->file('image');
//
//        $imageName = time() . '.' . $image->getClientOriginalExtension();
//
//        $image->storeAs('storage/images', $imageName);
//
//        Home::create([
//            'image' => 'storage/images/' . $imageName,
//        ]);
//
//        return redirect()->route('crud.index')->with('success', 'Rasm muvaffaqiyatli yuklandi.');
//    }
}
