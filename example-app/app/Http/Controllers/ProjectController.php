<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project= Project::all();
        return view('admin.project.index',compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);

        if ($request->hasFile('show_image')) {
            $showImages = $request->file('show_image');
            foreach ($showImages as $showImage) {
                $showImageName = time() . '_' . $showImage->getClientOriginalName();
                $showImage->move(public_path('storage/images'), $showImageName);
            }

            Project::create([
                'project_type' => $request->input('project_type'),
                'project_url' => $request->input('project_url'),
                'image' => 'storage/images/' . $imageName,
                'show_image' => 'storage/images/' . $showImageName,
            ]);
        }

        return redirect()->route('project.index')->with('success', 'Muvaffaqiyatli qo`shildi');
    }

//
//    public function edit(string $id)
//    {
//        $tame = Tame::findOrFail($id);
//        return view('admin.our-tame.edit',compact('tame'));
//
//    }
//
//    public function update(Request $request, string $id)
//    {
//        $tame = Tame::findOrFail($id);
//        $tame->update($request->all());
//        return redirect()->route('our-tame.index')->with('success','Mofaqiyatli ozgartirildi');
//    }
//
    public function show(string $id)
    {
        $show = Project::findOrFail($id);

        return view('admin.project.show',compact('show'));
    }

    public function destroy(string $id)
    {
        $tame = Project::findOrFail($id);

        $tame->delete();

        return redirect()->route('project.index')->with('success','mofaqiyatli ochirildi');

    }
//
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
//        Tame::create([
//            'image' => 'storage/images/' . $imageName,
//        ]);
//
//        return redirect()->route('crud.index')->with('success', 'Rasm muvaffaqiyatli yuklandi.');
//    }
}
