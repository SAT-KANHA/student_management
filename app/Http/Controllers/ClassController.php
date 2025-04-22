<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
public function store(Request $request){
    $class =new ClassModel();
    $class->class_name = $request->class_name;
    $class->decription = $request->class_decription;
    $class->save();
    return redirect("/list-class");
}
public function index(){
    $listclass = ClassModel::all();
    return view("classes.index",compact("listclass"));}

    public function edit($id)
    {
        $class = ClassModel::findOrFail($id);
        return view('classes.edit', compact('class'));
    }
    public function update(Request $request, $id)
{
    $class = ClassModel::findOrFail($id);
    $class->class_name = $request->class_name;
    $class->decription = $request->class_decription;
    $class->save();

    return redirect('/list-class');

}
public function destroy($id)
{
    $class = ClassModel::findOrFail($id);
    $class->delete();

    return redirect('/list-class');
}


}