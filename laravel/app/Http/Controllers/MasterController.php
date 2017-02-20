<?php

namespace App\Http\Controllers;
use App\Repositories\CrawlerRepositoryInterface;
use App\Repositories\MatchRepositoryInterface;
use Illuminate\Http\Request;
use App\Match;
use App\Odd;
use Goutte;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Storage;
class MasterController extends Controller
{


    public function __construct(CrawlerRepositoryInterface $crawler,MatchRepositoryInterface $mr)
    {
      $this->crawler=$crawler;
	  $this->mr=$mr;
    }
    /**
     * Display a listing of the resource.
     *首页 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	  $mids=$this->crawler->Midlist();
	  $array_term=[];
	  $array_match=[];
	  $match=new Match();
	  $odd=new Odd();
	  foreach($mids as $mid){
	  if($match->where('mid',$mid)->count()==0)
	  {
		  $this->crawler->selectNoDump($mid);
	  }
	  $m=$match->where('mid',$mid)->first();
	  $o=$odd->where('mid',$mid)->where('init',1)->first();
	  if($o!=null)
	  {
		  $m->sheng=$o->sheng;
		  $m->ping=$o->ping;
		  $m->fu=$o->fu;
	  }
		  array_push($array_match,$m);	   
	  }
	  $matches=$array_match;
	  $term=date("Ymd");
	  array_push($array_term,date("Ymd")-4,date("Ymd")-3,date("Ymd")-2,date("Ymd")-1,date("Ymd")+0);
	  return view('index',['matches'=>$matches,'terms'=>$array_term,'tterm'=>$term]);
    }
	public function indexall()
    {
        $this->crawler->getall();
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
	*分析数据
	*/
	public function showMaster($mid)
	{   
	dump('0-'.date('H:m:s'));
	  $match=$this->mr->matchMid($mid);
	  $matches=$this->mr->matchAnalysis($match);
	  $odds=$this->mr->getodds($mid);
	  //return view('analysis',['mid'=>$mid,'matches'=>$matches,'match'=>$match,'odds'=>$odds]);
	  
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
		//return view('test');
		dump($this->mr->getfenshu0(2.8,3,3));
	}
	public function analysis()
	{
		
		return view('analysis');
	}
    public function postanalysis(Request $request){

	 $win=$request->input('win');
	 $draw=$request->input('draw');
	 $lose=$request->input('lose');
	 $matchs=DB::select('select A.league,A.season,A.round,A.score,A.team1,A.team2,A.result from matches as A left join odds as B on A.mid=B.mid WHERE B.sheng =:sheng and B.ping=:ping and B.fu =:fu and B.init=1 ORDER BY A.result ',['sheng'=>$win,'ping'=>$draw,'fu'=>$lose]);	
	 $COUNT_V=0;
	 $COUNT_D=0;
	 $COUNT_F=0;
	 foreach($matchs as $match)
	 {
		    if($match->result=="胜"){$COUNT_V++;}
			if($match->result=="平"){$COUNT_D++;}
			if($match->result=="负"){$COUNT_F++;}
	 		$league=$match->league;
	 		$season=$match->season;
	 		$round=$match->round;
	 		$team=$match->team1;
	 		$team2=$match->team2;
	 		$points=0;
	 		$points2=0;
	 		$point_home=0;
	 		$point_away=0;
	 		$goal=0;
	 		$goal_home=0;
	 		$goal_away=0;
	 		$sms=DB::select('SELECT * FROM matches as A where A.league=:league and A.season=:season and A.round<:round AND (team1=:team1 OR team2=:team2) LIMIT 6',['league'=>$league,'season'=>$season,'round'=>$round,'team1'=>$team,'team2'=>$team]);
	 		foreach($sms as $sm){
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team){$points+=3;$goal+=$sm->score_home;}			 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points+=1;$goal+=$sm->score_home;		 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team){$points+=3;$goal+=$sm->score_away;}		 
	 		   }
	 		}
	 		$sms=DB::select('SELECT * FROM matches as A where A.league=:league and A.season=:season and A.round<:round AND (team1=:team1 OR team2=:team2) LIMIT 6',['league'=>$league,'season'=>$season,'round'=>$round,'team1'=>$team2,'team2'=>$team2]);
	 		foreach($sms as $sm){
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team2){$points2+=3;}			 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points+=1;		 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team2){$points2+=3;}		 
	 		   }
	 		}
	     dump($win .' '. $draw.' ' . $lose .' '.$season.' ' .$league.' ' .$round.'--' .'主队得分:'.$points.' '.'客队得分:'.$points2.'--'.'比分'.$match->score.' '.$match->result);
	 }
	    dump("胜".$COUNT_V.' '."平".$COUNT_D.' '."负".$COUNT_F);

		  }
	/*
	*显示指定期数赛事
	*/
	public function showMatchList($term){
	  //$term=$request->input('select');
	  $mids=$this->crawler->Midlist2($term);
	  $array_term=[];
	  $array_match=[];
	  $match=new Match();
	  $odd=new Odd();
	  foreach($mids as $mid){
	  if($match->where('mid',$mid)->count()==0)
	  {
		  $this->crawler->selectNoDump($mid);
	  }
	  $m=$match->where('mid',$mid)->first();
	  $o=$odd->where('mid',$mid)->where('init',1)->first();
	   if($o!=null)
	  {
		  $m->sheng=$o->sheng;
		  $m->ping=$o->ping;
		  $m->fu=$o->fu;
	  }
      array_push($array_match,$m);	  
	  }
	  $matches=$array_match;
	  array_push($array_term,date("Ymd")-4,date("Ymd")-3,date("Ymd")-2,date("Ymd")-1,date("Ymd")+0);
	  return view('matchList',['matches'=>$matches,'terms'=>$array_term]);

	}
	/*
	*更新指定期数赛事
	*/
	public function freshMatchList($mid){
	   $mids=$this->crawler->Midlist2($mid);
	  $array_term=[];
	  $array_match=[];
	  $match=new Match();
	  $odd=new Odd();
	  foreach($mids as $mid){
		 $m=$match->where('mid',$mid)->first();
		  if($m->result=='--')
		  {
           $this->crawler->selectNoDump($mid);
		   $m=$match->where('mid',$mid)->first();
		  }
	  $o=$odd->where('mid',$mid)->where('init',1)->first();
	  if($o!=null)
	  {
		  $m->sheng=$o->sheng;
		  $m->ping=$o->ping;
		  $m->fu=$o->fu;
	  }
		  array_push($array_match,$m);	   
	  }
	  $matches=$array_match;
	  array_push($array_term,date("Ymd")-4,date("Ymd")-3,date("Ymd")-2,date("Ymd")-1,date("Ymd")+0);
	  return view('matchList',['matches'=>$matches,'terms'=>$array_term]);
	}
}
