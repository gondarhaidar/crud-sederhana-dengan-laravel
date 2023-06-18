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
        return view('index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|max:255',
            'nis' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);
        Student::create($validateData);
        return redirect('/student')->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|max:255',
            'nis' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);
        Student::where('id', $student->id)->update($validateData);
        return redirect('/student')->with('success', 'Data siswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/student')->with('success', 'Data siswa berhasil dihapus');
    }
}
