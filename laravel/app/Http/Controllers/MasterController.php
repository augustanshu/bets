<?php

namespace App\Http\Controllers;
use App\Repositories\CrawlerRepositoryInterface;
use Illuminate\Http\Request;
use App\Match;
use App\Odd;
use Goutte;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Storage;
class MasterController extends Controller
{


    public function __construct(CrawlerRepositoryInterface $crawler)
    {
      $this->crawler=$crawler;
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
	
	/*
	*首页显示数据
	*
	*/
	public function showMaster($mid)
	{   
	//$match=Match::where('mid','>','0')->orderBy('id','desc')->first();
   // $mid=$match->mid+1;
	echo $this->crawler->select($mid);
	 
     
	}
	
	public function showStorage()
	{
		//$content=Storage::get('yc09-10.php');
		//$this->crawler->getLeague($content);
		 $files = Storage::allfiles('/match');
		 dd($files);

		
	}
	
	public function seeMatch($mid)
	{
		/*
		echo '</br>' . "zhudui" . '</br>' ;
		$url='http://fenxi.zgzcw.com/'.$mid.'/bsls';
		 $crawler = Goutte::request('GET', $url);
		 $match=new Match;
		 $crawler->filter('.bsls > .bslsr > .b-1 > table > tbody > tr')->each(function ($node,$j=0)
	     {
			 $r1=0.00;
			 if($j>0&&$j<10)
			 {
			  $result= $node->attr('f') . '<br/>';
			  $h=$node->attr('h');
			  if($domain = strstr($result, '胜') && $h==0)
			   {
				   $r=$node->filter('.peilv-span > span')->eq(0)->text();
				   $r+=0;
				   $r1+=$r;
				//echo  $node->filter('.peilv-span > span')->eq(0)->text() . '</br>';
			    }
				else if($domain = strstr($result, '负') && $h==1)
				{
				   $r=$node->filter('.peilv-span > span')->eq(2)->text();
				   $r+=0;
				   $r1+=$r;
				}
				else if($domain = strstr($result, '平'))
				{
				   $r=$node->filter('.peilv-span > span')->eq(1)->text();
				   $r+=0;
				   $r1+=$r;
				}
				echo $r1 . '</br>';
			 }
		 });
		 echo '</br>' . "kedui" . '</br>' ;
		  $crawler->filter('.bsls > .bslsr > .kedui > table > tbody > tr')->each(function ($node,$j=0)
	     {
			 $r1=0.00;
			 if($j>0&&$j<10)
			 {
			  $result= $node->attr('f') . '<br/>';
			  $h=$node->attr('h');
			  if($domain = strstr($result, '胜') && $h==0)
			   {
				   $r=$node->filter('.peilv-span > span')->eq(0)->text();
				   $r+=0;
				   $r1+=$r;
				//echo  $node->filter('.peilv-span > span')->eq(0)->text() . '</br>';
			    }
				else if($domain = strstr($result, '负') && $h==1)
				{
				   $r=$node->filter('.peilv-span > span')->eq(2)->text();
				   $r+=0;
				   $r1+=$r;
				}
				else if($domain = strstr($result, '平'))
				{
				   $r=$node->filter('.peilv-span > span')->eq(1)->text();
				   $r+=0;
				   $r1+=$r;
				}
				echo $r1 . '</br>';
			 }
		 });
		*/
			 
	}
	public function test()
	{
		echo $this->crawler->getLeague(36,2007);
		 //http://symfony.com/doc/current/components/dom_crawler.html?any
	}
	public function analysis()
	{
		return view('analysis');
	}
    public function postanalysis(Request $request){

	 $win=$request->input('win');
	 $draw=$request->input('draw');
	 $lose=$request->input('lose');
	 //$m=Odd::where('sheng',$win)->where('ping',$draw)->where('fu',$lose)->where('init',1)->get()->match;
	 //$matchs=DB::select('select A.league,A.season,A.round,A.score,A.team1,A.team2,A.result from matches as A left join odds as B on A.mid=B.mid WHERE B.sheng =:sheng and B.ping=:ping and B.fu =:fu and B.init=1 ORDER BY A.result',['sheng'=>$win,'ping'=>$draw,'fu'=>$lose]);	
	 //foreach($matchs as $match)
	// {
		$league='法国甲级联赛';
		$season='15-16';
		$round=10;
		$team='摩纳哥';
		$matchs=DB::select('SELECT * FROM matches as A where A.league=:league and A.season=:season and A.round<:round AND (team1=:team1 OR team2=:team2) LIMIT 6',['league'=>$league,'season'=>$season,'round'=>$round,'team1'=>$team,'team2'=>$team]);
	 //}
	 dd($matchs);
      	 //$matchs=DB::select('SELECT * FROM matches where matches.league=:league AND matches.season=:season AND matches.round<:round AND (team1=:team OR team2=:team) LIMIT 6 ',['league'=>$league,'season'=>$season,'round'=>$round,'team'=>$team]);
    }
}
