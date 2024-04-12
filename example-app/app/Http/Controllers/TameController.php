<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Product;
use App\Models\Tame;
use Illuminate\Http\Request;

class TameController extends Controller
{
    public function index()
    {
        $team= Tame::all();
        return view('admin.our-tame.index',compact('team'));
    }

    public function create()
    {
        return view('admin.our-tame.create');
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);

        Tame::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'linkedin' => $request->input('linkedin'),
            'image' => 'storage/images/' . $imageName,
        ]);

        return redirect()->route('our-tame.index')->with('success','Mofiqayatli qoshildi');

    }

    public function edit(string $id)
    {
        $tame = Tame::findOrFail($id);
        return view('admin.our-tame.edit',compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Tame::findOrFail($id);
        $tame->update($request->all());
        return redirect()->route('our-tame.index')->with('success','Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Tame::findOrFail($id);

        return view('admin.our-tame.show',compact('show'));
    }

    public function destroy(string $id)
    {
        $tame = Tame::findOrFail($id);

        $tame->delete();

        return redirect()->route('our-tame.index')->with('success','mofaqiyatli ochirildi');

    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('storage/images', $imageName);

        Tame::create([
            'image' => 'storage/images/' . $imageName,
        ]);

        return redirect()->route('crud.index')->with('success', 'Rasm muvaffaqiyatli yuklandi.');
    }


}
