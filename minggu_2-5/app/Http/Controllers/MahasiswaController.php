<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
class MahasiswaController extends Controller
{
    public function index(){
    	$nama = "Popo Zakaria";
 
    	$pelajaran = ["Pengujian Perangkat Lunak","Workshop Web Framework","Workshop Mobile Native"];
 
    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    }
}