<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\University;
use App\Notice;
use Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
    	return view('admin.login');
    }

    public function submit(Request $request){
    	$this->validate($request,[
    		'email'=>'required',
    		'password'=>'required',
    		]);
    	$admin=Admin::where('email','=',$request->email)
    			->where('password','=',md5($request->password))
    			->first();
    	if($admin){
            Session::put('admin_name',$admin->name);
            Session::put('admin_id',$admin->id);
            return redirect('/dashboard');
        }
    	

    	return redirect()->back();
    }

    public function addUniverstiy(){
        return view('admin.addUniversity');
    }

    public function store(Request $request){
        //echo strtodate($request->admission_date;
        $university = new University;
        $university->name =  $request->name;
        $university->a_gpa = $request->a_gpa;
        $university->b_gpa = $request->b_gpa;
        $university->c_gpa = $request->c_gpa;
        $university->d_gpa = $request->d_gpa;
        $university->admission_date = $request->admission_date;
        $university->admission_time = $request->admission_time;
        $university->save();
        return redirect('/allUniversity');
    }

    public function allUniversity(){
        $allUniversity = University::all();
        return view('admin.allUniversity')->with('allUniversity',$allUniversity);
    }

    public function editUniversity($id){
        $university = University::find($id);
        return view('admin.editUniversity')->with('university',$university);
    }

    public function update(Request $request, $id){
        $university = University::find($id);
        $university->name =  $request->name;
        $university->a_gpa = $request->a_gpa;
        $university->b_gpa = $request->b_gpa;
        $university->c_gpa = $request->c_gpa;
        $university->d_gpa = $request->d_gpa;
        $university->admission_date = $request->admission_date;
        $university->admission_time = $request->admission_time;
        $university->save();
        return redirect('/allUniversity');
    }

    public function addNotice(){
        return view('admin.addNotice');
    }

    public function storeNotice(Request $request){
        $notice = new Notice;
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->save();
        return redirect()->back();
    }

    public function allNotice(){
        $allNotices = Notice::all();
        return view('admin.allNotice')->with('allNotices',$allNotices);
    }

    public function deleteNotice($id){
        $notice = Notice::find($id);
        $notice->delete();
        return redirect('/allNotice');
    }

    public function deleteUniversity($id){
        $university = University::find($id);
        $university->delete();
        return redirect('/allUniversity');
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
