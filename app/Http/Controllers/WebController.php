<?php

namespace App\Http\Controllers;

use App\Postjob;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Home(){

    	$data = Postjob::all();

    	return view('index',compact('data'));
    }

    public function Blog(){
    	return view('blog');
    }

    public function Login(){
    	return view('login');
    }

    public function Jobdetail($id){

    	$datas = Postjob::findOrFail($id);

    	return view('jobdetail',compact('datas'));
    }

    
}
