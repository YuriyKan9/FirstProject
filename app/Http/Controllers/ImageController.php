<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class ImageController extends Controller
{
    public function index(){
        return view('image');
    }
    public function save(Request $request)
    {
         
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
        ]);  
 
        $name = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->store('images','public');
        $userid = auth()->user()->id;
 
        $save = new Photo;
 
        $save->user_id = $userid;
        $save->name = $name;
        $save->path = $path;
 
        $save->save();
 
        return redirect('')->with('status', 'Image Has been uploaded');
 
    }
    public function show(){
        return view('show',
        [
            'photos'=>Photo::all()
        ]);
    }
}