<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;
use App\LocalCache;

class AdminCacheController extends Controller
{
    public function index()
	{
		$cache=new LocalCache();
		$cs=$cache->get();
		return view('admin.cache',['cs'=>$cs]);
	}
	public function destroy($key)
	{
		$cache=new LocalCache();
		$key="laravel".$key;
		$c=LocalCache::where('key',$key)->delete();
		//dump($c);
		return $c;
	}
	 public function Show()
	{
		$cache=new LocalCache();
		$cs=$cache->get();
		return view('admin.part.cache',['cs'=>$cs]);
	}
	
}
