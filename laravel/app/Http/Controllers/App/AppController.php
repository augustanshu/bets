<?php

namespace App\Http\Controllers\App;

use Illuminate\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facedes\Storage;
class AppController extends Controller
{
    public function index()
	{
		return view ('app.images.index');
	}
	
	public function store(Request $request)
	{
		
		$image=$request->file('images')->store('2.jpg');
		//Image::make($request->file('images'))->resize(300, 200)->save('foo.jpg');
	}
}
