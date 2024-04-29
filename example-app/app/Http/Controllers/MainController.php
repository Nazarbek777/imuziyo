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
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{




    public function page()
    {
        $main = Main::all();
        $tame = Tame::all();
        $connection = Connection::all();
        $project = Project::all();
        $network = Network::all();
        $show = Show::all();
        $home = Home::all();

        return view('index',compact('main','tame','project','connection','network','show','home'));
    }

    public function index()
    {
        $main = Main::all();
        return view('auth.crud.index', compact('main'));

    }
   public function create()
   {
       return view('auth.crud.create');
   }
   public function store(Request $request)
   {
       $image = $request->file('image');
       $imageName = time() . '.' . $image->extension();
       $image->move(public_path('storage/images'), $imageName);
       Main::create([
           'image' => 'storage/images/' . $imageName,
       ]);
       return redirect()->route('crud.index')->with('success', 'Product add');
   }
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('storage/images', $imageName);

        Main::create([
            'image' => 'storage/images/' . $imageName,
        ]);

        return redirect()->route('crud.index')->with('success', 'Rasm muvaffaqiyatli yuklandi.');
    }
    public function destroy(string $id)
    {
        $image  = Main::findOrFail($id);
        Storage::delete($image);
        $image->delete();
        return redirect()->route('crud.index')->with('success','Delete image');
    }

}
