<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Main;
use App\Models\Network;
use App\Models\Project;
use App\Models\Show;
use App\Models\Tame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShowController extends Controller
{
    public function allShow( $id)
    {


        $network = Network::all();
        $project_type = Show::findOrFail($id);
        $show_images = explode(',', $project_type->show_image);
        return view('admin.shows.main', [
            'project_type' => $project_type,
            'show_images' => $show_images,
            'network' => $network,

        ]);
    }


    public function index()
    {
        $project = Show::all();
        return view('admin.shows.index', compact('project'));
    }

    public function create()
    {
        return view('admin.shows.create');
    }

    public function store(Request $request)
    {


        $showImageNames = [];
        if ($request->hasFile('show_image')) {
            $showImages = $request->file('show_image');
            foreach ($showImages as $showImage) {
                $showImageName = time() . '_' . $showImage->getClientOriginalName();
                $showImage->move(public_path('storage/images'), $showImageName);
                $showImageNames[] = 'storage/images/' . $showImageName;
            }
        }

        Show::create([
            'content' => $request->input('content'),
            'description' => $request->input('description'),
            'title' => $request->input('title'),
            'show_image' => implode(',', $showImageNames),
        ]);

        return redirect()->route('shows.index')->with('success', 'Muvaffaqiyatli qo`shildi');
    }

    public function edit(string $id)
    {
        $tame = Show::findOrFail($id);
        return view('admin.shows.edit', compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Show::findOrFail($id);
        $tame->update($request->all());
        return redirect()->route('shows.index')->with('success', 'Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Show::findOrFail($id);

        $show_images = explode(',', $show->show_image);

        return view('admin.shows.show', compact('show', 'show_images'));
    }

    public function destroy(string $id)
    {
        $tame = Show::findOrFail($id);

        $tame->delete();

        return redirect()->route('shows.index')->with('success', 'mofaqiyatli ochirildi');

    }
}
