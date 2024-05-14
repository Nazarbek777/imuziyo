<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $team = Network::all();
        return view('admin.network.index',compact('team'));
    }

    public function create()
    {
        return view('admin.network.create');
    }

    public function store(Request $request)
    {

        Network::create([
            'name_uz' => $request->input('name_uz'),
            'name_ru' => $request->input('name_ru'),
            'name_en' => $request->input('name_en'),
            'telegram' => $request->input('telegram'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
        ]);

        return redirect()->route('network.index')->with('success','Mofiqayatli qoshildi');

    }

    public function edit(string $id)
    {
        $tame = Network::findOrFail($id);
        return view('admin.network.edit',compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Network::findOrFail($id);
        $tame->update($request->all());
        return redirect()->route('network.index')->with('success','Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Network::findOrFail($id);

        return view('admin.network.show',compact('show'));
    }

    public function destroy(string $id)
    {
        $tame = Network::findOrFail($id);

        $tame->delete();

        return redirect()->route('network.index')->with('success','mofaqiyatli ochirildi');

    }

}
