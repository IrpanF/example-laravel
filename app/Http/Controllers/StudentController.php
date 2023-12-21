<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with('class')->get();
        // eloquent orm (recomend)
        // query builder
        // raw query
        return view('student', ['studentList' => $student]);

        // // query builder
        // $student =DB::table('students')->get();

        // DB::table('student')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '0201021',
        //     'class_id' => 1
        // ]);
        //
        // DB::table('student')->where('id', 27)->update([
        //     'name' => 'query builder 2',
        //     'class_id' => 3
        // ]);

        // DB::table('student')->where('id', 27)->delete();

        // // eLoquent
        // $student =Student::all();

        // Student::create([
        //     'name' => 'eLoquen',
        //     'gender' => 'P',
        //     'nis' => '0201033',
        //     'class_id' => 2
        // ]);
        // Student::find(28)->update([
        //     'name' => 'eLoquen 2',
        //     'class_id' => 1
        // ]);

        // Student::find(28)->delete();
        
        
        // // dd($student);
        // insert into student ('name', 'gender', 'nis', 'class_id') values(...)
    }

}
