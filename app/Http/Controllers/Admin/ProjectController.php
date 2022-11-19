<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::get();
        return view('admin.pages.project.index',compact('projects'));
    }
    public function create()
    {
        return view('admin.pages.project.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png,svg,webp',
        ],
            [
                'title.required'=>'Baslığı  daxil edin',
                'desc.required'=>'Mətni  daxil edin',
                'img.required'=>'Şəkili daxil edin',
                'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
            ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $project=new Project();


        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/projects/'.$fileName;

            $request->img->storeAs('public/projects/',$fileName);
            $project->img=$fileNameWithUpload;
        }

        $data['slug'] = [];
        foreach (json_decode($request->title) as $key => $title) {
            $data['slug'][$key] = Str::slug($title);
        }

        $project->title=$request->title;
        $project->desc=$request->desc;
        $project->slug=$data['slug'];
        $project->save();

        toastr()->success('Layihəniz uğurla əlavə olundu');
        return redirect()->route('admin.project');
    }

    public function edit($id)
    {
        $project=Project::findOrFail($id);
        return view('admin.pages.project.edit',compact('project'));
    }
    public  function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'mimes:jpg,png,svg,webp',
        ],
            [
                'title.required'=>'Baslığı  daxil edin',
                'desc.required'=>'Mətni  daxil edin',
                'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
            ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $project=Project::findOrFail($id);

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/projects/'.$fileName;
            if(File::exists($project->img))
            {
                File::delete($project->img);
            }
            $request->img->storeAs('public/projects/',$fileName);
            $project->img=$fileNameWithUpload;
        }


        $data['slug'] = [];
        foreach (json_decode($request->title) as $key => $title) {
            $data['slug'][$key] = Str::slug($title);
        }

        $project->title=$request->title;
        $project->desc=$request->desc;
        $project->slug=$data['slug'];
        $project->save();
        toastr()->success('Layiheniz  uğurla yeniəndi');
        return redirect()->route('admin.project');
    }
    public function destroy($id)
    {
        $project=Project::findOrFail($id);

        if(File::exists($project->img))
        {
            File::delete($project->img);
        }
        $project->delete();
        toastr()->success('Layihəniz uğurla silindi');
        return redirect()->route('admin.project');
    }
}
