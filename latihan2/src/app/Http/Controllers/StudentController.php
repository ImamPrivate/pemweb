<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //eloquent
        // $student = Student::all();
        // dd("$student");
        // return view('students', ['studentList' => $student]);

        //query builder
        // $student = DB::table('students')->get();
        // dd("$student");
        // return view('students', ['studentList' => $student]);

        //contoh collections
        $nilai = [2, 3, 4, 1, 5, 2, 3, 4, 5];

        $hasil = collect($nilai)->avg();
        dd($hasil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //query builder
        // $student = DB::table('students')->insert([
        //     'name' => 'tes',
        //     'gender' => 'L',
        //     'nis' => '134254',
        // ]);

        //eloquent
        // $student = Student::create([
        //     'name' => 'tes',
        //     'gender' => 'L',
        //     'nis' => '134254',
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //query builder
        // $student = DB::table('students')->where('id', 5)->update([
        //     'name' => 'Mamat',
        //     'gender' => 'L',
        //     'nis' => '134254',
        // ]);
        //eloquent
        // $student = Student::findOrFail([
        //     'name' => 'tes',
        //     'gender' => 'L',
        //     'nis' => '134254',
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //query builder
        // $student = DB::table('students')->where('id', 5)->delete();
        //eloquent
        // $student = Student::find(6)->delete();
    }
}
