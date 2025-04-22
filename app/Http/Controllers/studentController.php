<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\studentModel;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
{
    $students = studentModel::all(); // eager load class relation
    return view('students.index', compact('students'));
}

    // Show create student form
    public function create()
    {
        $classes = ClassModel::all();
        return view('students.create', compact('classes'));
    }

    // Store a new student
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'student_phone' => 'nullable|string|max:20',
            'student_email' => 'nullable|email|max:255',
        ]);

        $student = new studentModel();
        $student->class_id = $request ->class_id;
        $student->student_name = $request->student_name;
        $student->phone = $request->student_phone;
        $student->email = $request->student_email;
        $student->save();

        return redirect('/list-student')->with('success', 'Student created successfully!');
    }

    // Show edit form for a student
    public function edit($id)
    {
        $student = studentModel::findOrFail($id); // ✅ only get one student
        $classes = ClassModel::all();             // ✅ get class list for dropdown
    
        return view('students.edit', compact('student', 'classes'));
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'student_phone' => 'nullable|string|max:20',
            'student_email' => 'nullable|email|max:255',
        ]);

        $student = studentModel::findOrFail($id);
        $student->class_id = $request -> class_id;
        $student->student_name = $request->student_name;
        $student->phone = $request->student_phone;
        $student->email = $request->student_email;
        $student->save();

        return redirect('/list-student')->with('success', 'Student updated successfully!');
    }

    // Delete a student
    public function destroy($id)
    {
        $student = studentModel::findOrFail($id);
        $student->delete();

        return redirect('/list-student')->with('success', 'Student deleted successfully!');
    }
    
}
