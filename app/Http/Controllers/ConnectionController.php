<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function index()
    {
        $team = Connection::all();
        return view('admin.connection.index',compact('team'));
    }
    public function create()
    {
        return view('admin.connection.create');
    }

    public function store(Request $request)
    {

        Connection::create([
            'crm_name_uz' => $request->input('crm_name_uz'),
            'crm_name_ru' => $request->input('crm_name_ru'),
            'crm_name_en' => $request->input('crm_name_en'),
            'crm_number' => $request->input('crm_number'),
            'crm_location_uz' => $request->input('crm_location_uz'),
            'crm_location_ru' => $request->input('crm_location_ru'),
            'crm_location_en' => $request->input('crm_location_en'),

        ]);

        return redirect()->route('connection.index')->with('success','Mofiqayatli qoshildi');

    }

    public function edit(string $id)
    {
        $tame = Connection::findOrFail($id);
        return view('admin.connection.edit',compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Connection::findOrFail($id);
        $tame->update($request->all());
        return redirect()->route('connection.index')->with('success','Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Connection::findOrFail($id);

        return view('admin.connection.show',compact('show'));
    }

    public function destroy(string $id)
    {
        $tame = Connection::findOrFail($id);

        $tame->delete();

        return redirect()->route('connection.index')->with('success','mofaqiyatli ochirildi');

    }


}
