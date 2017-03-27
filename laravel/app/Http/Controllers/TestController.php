<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Http\Request;
use App\Match;
use Illuminate\Support\Facades\DB;
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
   
  
     public function ajax(Request $request)
   {
	   $league=$request['league']==null?'':$request['league'];
	   $round=$request['w']==null?1:$request['w'];
	   $value=Match::where('league','英格兰超级联赛')->where('season','15-16')->where('round',$round)->get();
	   return response()->json(array('data'=>$value),200);
   }
}
