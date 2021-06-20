<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

use DB;

class StudentController extends Controller
{
    public function index() {
        $all_student = DB::table('students')->get()->sortByDesc('student_id');
        $manager_student = view('library.student.index')->with('all_student', $all_student);
        return view('layout.admin')->with('library.student.index', $manager_student);
    }

    public function create() {
        return view('library.student.add');
    }

    public function store(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['phone_number'] = $request->phone_number;
        $data['card_expty_date'] = $request->card_expty_date;
//        $data['active'] = $request->active;

        DB::table('students')->insert($data);
        return redirect()->route('students.index');
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
    }

    public function edit($id) {
        $edit_student = DB::table('students')->where('student_id', $id)->get();
        $manager_student = view('library.student.edit')->with('edit_student', $edit_student);
        return view('layout.admin')->with('library.student.edit', $manager_student);
    }

    public function update($id, Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['phone_number'] = $request->phone_number;
        $data['card_expty_date'] = $request->card_expty_date;
//        $data['active'] = $request->active;

        DB::table('students')->where('student_id', $id)->update($data);
        return redirect()->route('students.index');

    }

    public function delete($id) {
        DB::table('students')->where('student_id', $id)->delete();
        return redirect()->route('students.index');
    }

}
