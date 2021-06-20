<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
    public function index() {
        $all_member = DB::table('members')->get()->sortByDesc('member_id');
        $manager_member = view('library.member.index')->with('all_member', $all_member);
        return view('layout.admin')->with('library.member.index', $manager_member);
    }

    public function create() {
        return view('library.member.add');
    }

    public function store(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        $data['user_name'] = $request->user_name;
        $data['password'] = $request->password;
        $data['status'] = $request->status;
        $data['level'] = $request->level;
        $data['active'] = $request->active;

        DB::table('members')->insert($data);
        return redirect()->route('members.index');

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
    }
}
