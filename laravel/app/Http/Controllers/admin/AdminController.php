<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Repositories\CrawlerRepositoryInterface;
use App\Repositories\MatchRepositoryInterface;
use App\Match;
use App\MatchPoint;
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
	public function getFile($term)
	{
			$files = Storage::allfiles('/document');
			foreach($files as $content)
			{
			  $content=Storage::get($content);
			  $this->crawler->getDoumentList($content,$term);
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
	 $matches=Match::where('score','-')->where('time','>','2008-01-31 10:55:35')->orderBy('time','desc')->get();
	 foreach($matches as $match)
	 {
		 $this->crawler->select($match->mid);
		 sleep(rand(100,150)/100);
	 }
	}
    /*
	 分析赛事
	*/
   public function analysisodd(Request $request)
   {
	   /*
	   $this->validate($request,[
	   'league' =>'required',
	   'w1'     =>'required',
	   'w2'     =>'required',
	   ]);
	   */
	    $league=$request['league']==null?'':$request['league'];
	   $w=$request['w']==null?1:$request['w'];
	   $value=MatchPoint::where('league','like',$league.'%')->where('sheng',$w)->where('round','>',5)->get();
	   return response()->json(array('data'=>$value),200);
   }
      public function analysis()
   {
	   return view('admin.analysis');
   }
   
   public function odd($mid)
   {
	   $odds=Odd::where('mid',$mid)->orderBy('updatetime','desc')->get();
	   return view('admin.part.odd',['odds'=>$odds]);
   }
}
