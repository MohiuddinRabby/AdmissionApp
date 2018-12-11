<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\University;
use App\Notice;
use Session;

class UserController extends Controller
{
    public function registration(){
    	return view('user.registration');
    }

    public function submit(Request $request){
    	$user = new Student;
    	$user->name = $request->name;
    	$user->password = md5($request->password);
    	$user->gpa = $request->ssc_gpa + $request->hsc_gpa;
    	$user->email = $request->email;
        $user->unit = $request->unit;
    	$user->save();
    	$result = Student::where('email','=',$request->email)
    						->where('password','=',md5($request->password))
    						->first();
    	Session::put('user_name',$result->name);
    	Session::put('user_id',$result->id);
    	return redirect('/studentPage');
    }

    public function login(Request $request){
    	$result = Student::where('email','=',$request->email)
    						->where('password','=',md5($request->password))
    						->first();
    	Session::put('user_name',$result->name);
    	Session::put('user_id',$result->id);
    	return redirect('/studentPage');
    }

    public function studentPage(){
    	$id = Session::get('user_id');
    	$student = Student::find($id);
    	if($student->unit == 1){
            $ch = "A";
    	   $allUniversity = University::where('a_gpa','<=',$student->gpa)
    								->get();
        }
        else if($student->unit == 2){
            $ch = "B";
            $allUniversity = University::where('b_gpa','<=',$student->gpa)
                                    ->get();
        }
        else{
            $ch = "C";
            $allUniversity = University::where('c_gpa','<=',$student->gpa)
                                    ->get();
        }

        $d_university = University::where('d_gpa','<=',$student->gpa)->get();
    	return view('user.studentForm')->with('allUniversity',$allUniversity)->with('d_university',$d_university)->with('ch',$ch);
    }

    public function noticeBoard(){
        $allnotices = Notice::all();
        return view('user.noticeBoard')->with('allnotices',$allnotices);
    }

    public function fullNotice($id){
        $notice = Notice::find($id);
        return view('user.fullNotice')->with('notice',$notice);
    }

    public function logout(){
    	Session::flush();
    	return redirect('/');
    }
}
