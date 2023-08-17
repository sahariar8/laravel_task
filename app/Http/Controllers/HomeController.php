<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function index(){

        return view('index');
   }
   public function store(Request $request){
    $info = new Info();
    $info->name = $request->name;
    $info->email = $request->email;
    $image = $request->img;
    $imageName = $image->getClientOriginalName();
    $folder ='frontend/images/';
    $image->move($folder,$imageName);
    $info->img = $folder.$imageName;

    $info->save();
    return back()->with("msg","Data Inserted Successfully");
   }
   public function manage(){

    $info = Info::all();
    return view('table',compact('info'));
   }
   public function destroy($id){
    $info = Info::find($id);
    if(file_exists($info->img)){
        unlink($info->img);
    }
    $info->delete();
    return back()->with("msg","Data Deleted Successfully");
   }
   public function edit($id){
        $info = Info::find($id);
        return view('edit',compact('info'));
   }
   public function update(Request $request, $id){
    $info = Info::find($id);
    $info->name = $request->name;
    $info->email = $request->email;
    if($request->img){
        if(file_exists($info->img)){
            unlink($info->img);
            }
        $image = $request->img;
        $imageName = $image->getClientOriginalName();
        $folder ='frontend/images/';
        $image->move($folder,$imageName);
        $info->img = $folder.$imageName;
        }
        $info->save();
        return back()->with('msg1','Data Updated Successfully');
   
   }
}
