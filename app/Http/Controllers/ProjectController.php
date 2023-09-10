<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\House;
use PhpParser\Node\Expr\FuncCall;

class ProjectController extends Controller
{
    public function index()
    {
        $houses = House::where('active',1)->get();
        return view('project',compact('houses'));
    }

    public function detail($id)
    {
        $folder = "";
        $description = "";
        $house = new House;
        $hid = House::true_id($id);
        $house = House::find($hid);
        return view('project_detail',compact('folder','id','house'));
    }

    public function  form()
    {
        $house = null;
        return view('project_form',compact('house'));
    }

    public function  insert(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cover' => ['required'],
            'images' => ['required'],
            'blueprint' => ['required'],
        ]);
        
        // dd($request->files);
        $files = [];
        if ($request->file('images')){
            foreach($request->file('images') as $key => $file)
            {
                $file_name = "image_".time().rand(1,99).'.'.$file->extension();  
                $file->move(public_path('img/projects/'), $file_name);
                $files[]['url'] = "img/projects/".$file_name;
            }
        }
        $cover = "";
        if ($request->file('cover')){
            $file= $request->file('cover');
            $file_name = "cover_".time().rand(1,99).'.'.$file->extension();  
             $file->move(public_path('img/projects/'), $file_name);
            $cover = "img/projects/".$file_name;
        }
        $blueprint = "";
        if ($request->file('blueprint')){
            $file= $request->file('blueprint');
            $file_name = "blueprint_".time().rand(1,99).'.'.$file->extension();  
            $file->move(public_path('img/projects/'), $file_name);
            $blueprint = "img/projects/".$file_name;
        }
        $description =  "-";
        if($request->description != null){
            $description =$request->description;
        }
        $house = new House;
        $house->name = $request->name;
        $house->description = $description;
        $house->bed_room = $request->bed_room;
        $house->bath_room = $request->bath_room;
        $house->living_room = $request->living_room;
        $house->kitchen_room = $request->kitchen_room;
        $house->area = $request->area;
        $house->car_park = $request->car_park;
        $house->pool_villa =  $request->pool_villa;
        $house->active = 1;
        $house->cover = $cover;
        $house->blueprint = $blueprint;
        $house->images = json_encode($files);
        $house->location = $request->location;
        $house->near_location = $request->near_location;
        $house->save();

        return view('project_form',compact('house'))->with('success','File uploaded successfully');
    }
}
