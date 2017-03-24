<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
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
   public function ajax(Request $request)
   {
	   $this->validate($request,[
	   'league' =>'required',
	   'w1'     =>'required',
	   'w2'     =>'required',
	   ]);
	    $l=$request['league'];
		$w1=$request['w1'];
		$w2=$request['w2'];
		$value=$this->mr->oddAnalysics($w1,$w2,$l);
		//dump($matches);
	   //$round=1;
	   //$value=Match::where('league','英格兰超级联赛')->where('season','15-16')->where('round',$round)->get();
	   //$value->round="21";
	   //$value=json_encode($value,JSON_UNESCAPED_UNICODE);
	   return view('part.odd',['matches'=>$value]);
   }
      public function ajax2()
   {
	   
		//dump($l);
		$value=$this->mr->oddAnalysics('2108225');
		//dump($matches);
	   //$round=1;
	   //$value=Match::where('league','英格兰超级联赛')->where('season','15-16')->where('round',$round)->get();
	   //$value->round="21";
	   //$value=json_encode($value,JSON_UNESCAPED_UNICODE);
	   return response()->json(array('data'=>$value),200);
   }
}
