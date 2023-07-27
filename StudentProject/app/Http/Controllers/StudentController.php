<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (strlen($request->get('name'))==0)
            return redirect('students')->with('error', 'Name is required');
        $student = new Student();
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->phone = $request->get('phone');
        $student->address = $request->get('address');
        $student->save();
        return redirect('students')->with('success', 'Student has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        // $student->name = $request->get('name');
        // $student->email = $request->get('email');
        $student->phone = $request->get('phone');
        $student->address = $request->get('address');
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students');
    }
}
