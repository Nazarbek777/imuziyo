<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Home;
use App\Models\Main;
use App\Models\Network;
use App\Models\Project;
use App\Models\Show;
use App\Models\Tame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProjectController extends Controller
{

    public function    sort()
    {

        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project = Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        return view('sort.layouts.sort-layouts',compact('main','tame','project','connection','network','home','show'));
    }

    public function allShow(Request $request , $locale = null, $id = null)
    {
        $connection = Connection::all();
        $project_type = Project::findOrFail($id);
        $show_images = explode(',', $project_type->show_image);
        $network = Network::all();
        return view('sort.show', [
            'project_type' => $project_type,
            'show_images' => $show_images,
            'network' => $network,
            'connection' => $connection,
        ]);
    }
    public function all(Request $request,$locale = null)
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project = Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        return view('sort.all',compact('main','tame','project','connection','network','home','show'));
    }


    public function technical(Request $request)
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project= Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        $project_type = $request->input('project_type', 'texnikum');
        $project_type_select = Project::where('project_type', $project_type)->get();
        return view('sort.technical',[
            'project' => $project,
            'project_type_select' => $project_type_select,
            'main' => $main,
            'tame' => $tame,
            'connection' => $connection,
            'network' => $network,
            'home' => $home,
            'show' => $show
        ]);
    }

    public function school(Request $request)
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project= Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        $project_type = $request->input('project_type', 'maktab');
        $project_type_select = Project::where('project_type', $project_type)->get();
        return view('sort.school',[
            'project' => $project,
            'project_type_select' => $project_type_select,
            'main' => $main,
            'tame' => $tame,
            'connection' => $connection,
            'network' => $network,
            'home' => $home,
            'show' => $show
        ]);
    }

    public function education(Request $request)
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project= Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        $project_type = $request->input('project_type', 'markaz');
        $project_type_select = Project::where('project_type', $project_type)->get();
        return view('sort.education',[
            'project' => $project,
            'project_type_select' => $project_type_select,
            'main' => $main,
            'tame' => $tame,
            'connection' => $connection,
            'network' => $network,
            'home' => $home,
            'show' => $show
        ]);
    }
    public function university(Request $request)
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project= Project::all();
        $network = Network::all();
        $home = Home::all();
        $show = Show::all();
        $project_type = $request->input('project_type', 'universitet');
        $project_type_select = Project::where('project_type', $project_type)->get();
        return view('sort.university',[
            'project' => $project,
            'project_type_select' => $project_type_select,
            'main' => $main,
            'tame' => $tame,
            'connection' => $connection,
            'network' => $network,
            'home' => $home,
            'show' => $show
        ]);
    }











    public function index()
    {
        $project= Project::all();
        return view('admin.project.index',compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request )
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);

        $showImageNames = [];
        if ($request->hasFile('show_image')) {
            $showImages = $request->file('show_image');
            foreach ($showImages as $showImage) {
                $showImageName = time() . '_' . $showImage->getClientOriginalName();
                $showImage->move(public_path('storage/images'), $showImageName);
                $showImageNames[] = 'storage/images/' . $showImageName;
            }
        }

        Project::create([
            'name_uz' => $request->input('name_uz'),
            'name_ru' => $request->input('name_ru'),
            'name_en' => $request->input('name_en'),
            'description_uz' => $request->input('description_uz'),
            'description_ru' => $request->input('description_ru'),
            'description_en' => $request->input('description_en'),
            'content_uz' => $request->input('content_uz'),
            'content_ru' => $request->input('content_ru'),
            'content_en' => $request->input('content_en'),
            'project_type' => $request->input('project_type'),
            'project_url' => $request->input('project_url'),
            'image' => 'storage/images/' . $imageName,
            'show_image' => implode(',', $showImageNames),
        ]);

        return redirect()->route('project.index')->with('success', 'Muvaffaqiyatli qo`shildi');
    }

    public function edit(Request $request, string $id)

    {
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('storage/images/' . $imageName);
            Project::make($image->getRealPath())->resize(200, 200)->save($imagePath);
        }


        $showImageNames = [];
        if ($request->hasFile('show_image')) {
            $showImages = $request->file('show_image');
            foreach ($showImages as $showImage) {
                $showImageName = time() . '_' . $showImage->getClientOriginalName();
                $showImage->move(public_path('storage/images'), $showImageName);
                $showImageNames[] = 'storage/images/' . $showImageName;
            }
        }
        $tame = Project::findOrFail($id);
        return view('admin.project.edit',compact('tame'));

    }

    public function update(Request $request, string $id)
    {
        $tame = Project::findOrFail($id);
        $tame->update($request->all());
        return redirect()->route('project.index')->with('success','Mofaqiyatli ozgartirildi');
    }

    public function show(string $id)
    {
        $show = Project::findOrFail($id);

        $show_images = explode(',', $show->show_image);

        return view('admin.project.show', compact('show', 'show_images'));
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
