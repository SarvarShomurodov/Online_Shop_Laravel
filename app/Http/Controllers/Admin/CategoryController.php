<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categoris;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request){
        

        // dd($request);
        $validatedData = $request->validated();
        
        
        $category = new Categoris;
        $category -> name = $validatedData['name'];
        $category -> slug = Str::slug($validatedData['slug']);
        $category -> description = $validatedData['description'];
        if($request->hasFile('image')){
           $file = $request->file('image'); 
           $ext = $file->getClientOriginalName();
           $filename = time().'.'.$ext;
           $file->move('uploads/category',$filename);

           $category -> image = $filename;
        }
        $category -> meta_title = $validatedData['meta_title'];
        $category -> meta_keyboard = $validatedData['meta_keyboard'];
        $category -> meta_description = $validatedData['meta_description'];
        $category -> status = $request -> status == true ? '1':'0';
        $category->save();

        return redirect('admin/category')->with('message','Category Add Success');
    }

    public function edit(Categoris $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request,$category){
        $validatedData = $request->validated();
        
        
        $category = Categoris::findOrFail($category);
        $category -> name = $validatedData['name'];
        $category -> slug = Str::slug($validatedData['slug']);
        $category -> description = $validatedData['description'];
        if($request->hasFile('image')){

            $path = 'uploads/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }

           $file = $request->file('image'); 
           $ext = $file->getClientOriginalName();
           $filename = time().'.'.$ext;
           $file->move('uploads/category',$filename);

           $category -> image = $filename;
        }
        $category -> meta_title = $validatedData['meta_title'];
        $category -> meta_keyboard = $validatedData['meta_keyboard'];
        $category -> meta_description = $validatedData['meta_description'];
        $category -> status = $request -> status == true ? '1':'0';
        $category->update();

        return redirect('admin/category')->with('message','Category Update Success');
    }
}
