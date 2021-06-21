<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BorrowController extends Controller
{
    public function index() {
        $all_borrow = DB::table('borrows')
            ->join('students', 'students.student_id', '=', 'borrows.student_id')
            ->join('members', 'members.member_id', '=', 'borrows.member_id')
            ->orderby('borrows.borrow_id', 'desc')->get();
        $manager_borrow = view('library.borrow.index')->with('all_borrow', $all_borrow);
        return view('layout.admin')->with('library.borrow.index', $manager_borrow);
    }

    public function create() {
        $member_borrow = DB::table('members')->orderby('member_id', 'desc')->get();
        $student_borrow = DB::table('students')->orderby('student_id', 'desc')->get();

        return view('library.borrow.add')->with('member_borrow', $member_borrow)
                                                ->with('student_borrow', $student_borrow);

    }

    public function store(Request $request) {
        $data = array();
        $data['student_id'] = $request->student_borrow;
        $data['member_id'] = $request->member_borrow;
        $data['expiry_date'] = $request->expiry_date;

        DB::table('borrows')->insert($data);
        return redirect()->route('borrows.index');
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
    }
}
