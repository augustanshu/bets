<?php

namespace App\Http\Controllers;
use App\Repositories\CrawlerRepositoryInterface;
use App\Repositories\MatchRepositoryInterface;
use Illuminate\Http\Request;
use App\Match;
use App\Odd;
use Goutte;
use Cache;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Storage;
class MasterController extends Controller
{

   protected $term=0;
   protected $match=0;
   protected $mid=0;
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
	 $term=date("Ymd");
	  $time=date("Ymd");
	  $array_term=[];
		$checkDayStr = date('Y-m-d ',time());
		$startTime = strtotime($checkDayStr."12:00".":00");
		if(time()>$startTime )
		{
			//dump('yes');
		}
		else
		{
		$term=$this->term=date("Ymd",strtotime("- 1 day"));
		}
	    $matches=Cache::remember($term,2880,function(){
		$array_match=[];
		$match=new Match();
		$odd=new Odd();
		$mids=$this->crawler->Midlist();
		//dump($mids);
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
		return $matches;
	  });
	  array_push($array_term,$term-4,$term-3,$term-2,$term-1,$term+0);
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
	  $this->match=$match=$this->mr->matchMid($mid);
	  $matches=Cache::remember('a'.$mid,1440,function(){
		  $m=$this->mr->matchAnalysis($this->match);
		  return $m;
	  });
	  
	  $odds=$this->mr->getodds($mid);
	  //dump($matches);
	  return view('analysis',['mid'=>$mid,'matches'=>$matches,'match'=>$match,'odds'=>$odds]);
	  
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
		//return view('ajax');
		//return view('test');
		//dump($this->mr->getfenshu0(2.8,3,3));
		//$seasons=array();
		$match=Match::where('mid',2113132)->first();
		//dump($match);
		dump($this->mr->getCurrentMatch($match->team1,$match->season,$match->league,$match->round));
		dump($this->mr->getCurrentMatch($match->team2,$match->season,$match->league,$match->round));
		
		
		
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
	$_t=$term;
	$array_term=[];
	$this->term=$term;
     $matches=Cache::remember($term,2880,function(){
			$array_match=[];
			$match=new Match();
			$odd=new Odd();
				 $mids=$this->crawler->Midlist2($this->term);
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
			return $array_match;
	  });
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
	  Cache::forget($mid);
	  Cache::put($mid,$matches,2880);
	  array_push($array_term,date("Ymd")-4,date("Ymd")-3,date("Ymd")-2,date("Ymd")-1,date("Ymd")+0);
	  return view('matchList',['matches'=>$matches,'terms'=>$array_term]);
	}
	public function postMid(Request $request,$mid)
	{
		$matches=Match::where('mid',$mid)->get();
		return [$matches];
	}
	public function showChart($mid)
	{   
		$da=[];
		$cd=[];
		$this->mid=$mid;
		$name='charts'.$mid;
		$da=Cache::remember($name,1440,function(){		
		  return $this->mr->getqiwangzu($this->mid);
		});
		$datas=$da[0];
		$datas2=$da[1];
		$s=[$datas[0]['season'],$datas[1]['season'],$datas[2]['season'],$datas[3]['season'],$datas[4]['season'],$datas[5]['season'],$datas[6]['season']];
		$d=[$datas[0]['qwz'],$datas[1]['qwz'],$datas[2]['qwz'],$datas[3]['qwz'],$datas[4]['qwz'],$datas[5]['qwz'],$datas[6]['qwz']];
		$d2=[$datas2[0]['qwz'],$datas2[1]['qwz'],$datas2[2]['qwz'],$datas2[3]['qwz'],$datas2[4]['qwz'],$datas2[5]['qwz'],$datas2[6]['qwz']];
		$name2='chartc'.$mid;
		$cd=Cache::remember($name2,1440,function(){		
		   return $this->mr->getcurrentqiwangzu($this->mid);
		});
		//$cd=$this->mr->getcurrentqiwangzu($this->mid);
		//dump($cd[0]);
		return view('chart',['mid'=>$mid,'season'=>$s,'datas'=>$d,'datas2'=>$d2,'cd'=>$cd[0],'cd2'=>$cd[1]]);
		

	}
}
