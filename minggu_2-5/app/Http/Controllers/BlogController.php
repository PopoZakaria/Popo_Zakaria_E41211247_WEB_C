<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BlogController extends Controller
{
 
	public function home(){
		return view('blog');
	}
 
	public function mahasiswa(){
		return view('mahasiswa');
	}
 
	public function formulir(){
		return view('formulir');
	}
 
}