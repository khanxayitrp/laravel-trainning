<?php

namespace App\Http\Controllers;

use App\Postjob;
use Illuminate\Http\Request;

class WebadminController extends Controller
{
    function Dashboard(){
    	return view('admin.dashboard');
    }
    function Postjob(){
    	return view('admin.job');
    }
    function Savejob(Request $request){

    	$this->validate($request,[
    		'Title'=>'required',
    		'Companyname'=>'required',
    		'Location'=>'required',
    		'Logo'=>'required',
    		'JobDescription'=>'required'
    	]);

    	if ($request->hasfile('Logo')){
    		$file = $request->file('Logo');
    		$filename =md5(date('Y-m-d') . microtime()) . time() . '_upload_.' . $file->getClientOriginalExtension();
    		$location = public_path('/upload/');
    		$file->move($location,$filename);

    		$save = new Postjob;
    		$save->title =$request->Title;
    		$save->companyname =$request->Companyname;
    		$save->location =$request->Location;
    		$save->logo =$filename;
    		$save->description =$request->JobDescription;

    		$save->save();

    		return back();

    	}
    	
    }
}
