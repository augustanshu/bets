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
   
   public function ajax()
   {
	   $round=1;
	   $value=Match::where('league','英格兰超级联赛')->where('season','15-16')->where('round',$round)->get();
	   //$value->round="21";
	   //$value=json_encode($value,JSON_UNESCAPED_UNICODE);
	   return response()->json(array('data'=>$value),200);
   }
     public function ajax2(Request $request)
   {
	   $round=$request['round'];
	   $value=Match::where('league','英格兰超级联赛')->where('season','15-16')->where('round',3)->get();
	   //$value->round="21";
	   //$value=json_encode($value,JSON_UNESCAPED_UNICODE);
	   return response()->json(array('data'=>$value),200);
   }
}
