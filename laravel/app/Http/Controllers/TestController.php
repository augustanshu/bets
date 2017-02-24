<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Http\Request;
use App\Match;
class TestController extends Controller
{
   public function index(Request $request)
   {
	   //$request->session()->pull('name','default');
	   //session(['name'=>'123']);
	   //$r=$request->session()->all();
	   $value=Match::where('league','英格兰超级联赛')->where('season','15-16')->get();
	   $f=Cache::put('123',$value,1000);
	   //return $f;
	   dump(Cache::get('123'));
   }
}
