<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Repositories\CrawlerRepositoryInterface;
use App\Repositories\MatchRepositoryInterface;
use App\Match;
use App\Odd;
class AdminController extends Controller
{
	
	
	public function __construct(CrawlerRepositoryInterface $crawler,MatchRepositoryInterface $mr)
    {
      $this->crawler=$crawler;
	  $this->mr=$mr;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * get docuemnt for term list
     *
     * 
     * 
     */
	public function getFile()
	{
			$files = Storage::allfiles('/document');
			foreach($files as $content)
			{
			  $content=Storage::get($content);
			  $this->crawler->getDoumentList($content,'20170317');
			}
	}
	 /**
     * crawler complete status='未'
     *
     * 
     * 
     */
	public function getUnComplete()
	{
	 $matches=Match::where('status','未')->get();
	 foreach($matches as $match)
	 {
		 $this->crawler->select($match->mid);
		 sleep(rand(100,150)/100);
	 }
	}
}
