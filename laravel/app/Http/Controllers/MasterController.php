<?php

namespace App\Http\Controllers;
use App\Repositories\CrawlerRepositoryInterface;
use App\Repositories\MatchRepositoryInterface;
use Illuminate\Http\Request;
use App\Match;
use App\Odd;
use App\MatchPoint;
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
	  //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *首页 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$term0=date("Ymd",strtotime("+1 day"));
			$this->term=$term1=date("Ymd");
			$term2=date("Ymd",strtotime("- 1 day"));
			$term3=date("Ymd",strtotime("- 2 day"));
			$term4=date("Ymd",strtotime("- 3 day"));
			$term5=date("Ymd",strtotime("- 4 day"));
			$term6=date("Ymd",strtotime("- 5 day"));
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
			$term0=date("Ymd");
			$this->term=$term1=date("Ymd",strtotime("- 1 day"));
			$term2=date("Ymd",strtotime("- 2 day"));
			$term3=date("Ymd",strtotime("- 3 day"));
			$term4=date("Ymd",strtotime("- 4 day"));
			$term5=date("Ymd",strtotime("- 5 day"));
			$term6=date("Ymd",strtotime("- 6 day"));
		}
	    $matches=Cache::remember($term1,2880,function(){
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
		$matches=$array_match;	
		return $matches;
	  });
	  
	  array_push($array_term,$term6,$term5,$term4,$term3,$term2,$term1,$term0);
	  return view('index',['matches'=>$matches,'terms'=>$array_term,'tterm'=>$term1]);
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
	  $team1=$this->match->team1;
	  $team2=$this->match->team2;
	  $matches=Cache::remember('a'.$mid,720,function(){
		  $m=$this->mr->matchAnalysis2($this->match);
		  return $m;
	  });
	  $history1=Cache::remember('h1'.$mid,720,function(){
		  $h=$this->mr->matchHistory($this->match->league,$this->match->team1,$this->match->team2,$this->match->season,$this->match->time,0,10);
		  return $h;
	  });
	  $history2=Cache::remember('h2'.$mid,720,function(){
		  $h2=$this->mr->matchHistory($this->match->league,$this->match->team2,$this->match->team1,$this->match->season,$this->match->time,0,10);
		  return $h2;
	  });
	  	  $history3=Cache::remember('h3'.$mid,720,function(){
		  $h3=$this->mr->matchHistory($this->match->league,$this->match->team1,$this->match->team2,$this->match->season,$this->match->time,1,10);
		  return $h3;
	  });
	  	  $history4=Cache::remember('h4'.$mid,720,function(){
		  $h4=$this->mr->matchHistory($this->match->league,$this->match->team1,$this->match->team2,$this->match->season,$this->match->time,2,10);
		  return $h4;
	 });
	 // dump($history1);
	  //dump($history2);
	  $odds=$this->mr->getodds($mid);
	  //dump($matches);
	  return view('analysis',['mid'=>$mid,'team1'=>$team1,'team2'=>$team2,'matches'=>$matches,'match'=>$match,'history1'=>$history1,'history2'=>$history2,'history3'=>$history3,'history4'=>$history4,'odds'=>$odds]);
	  
	}
	
	
	
	public function test()
	{
		//$this->crawler->selectNoDump(2126348);
		 // $this->getMatchPoint2('英格兰超级联赛');
		//return view('ajax');
		//return view('test');
		//dump($this->mr->getfenshu0(2.8,3,3));
		//$seasons=array();
		// $match=Match::where('mid',2122192)->first();
		//dump($match);
		//dump( $this->mr->getresult($match->league,$match->season,$match->team1,$match->time,true,6));
		//dump( $this->mr->getresult2($match->league,$match->season,$match->team1,$match->time,true,6));
		//dump($match);
		//dump($this->mr->getCurrentMatch($match->team1,$match->season,$match->league,$match->round));
		//dump($this->mr->getCurrentMatch($match->team2,$match->season,$match->league,$match->round));
		/*
		$matches=Match::where('status','未')->get();
		foreach( $matches as $match)
		{
		$this->crawler->select($match->mid);
		sleep(rand(100,120)/100);
		}
		*/
		$match=Match::where('mid','1896352')->first();
		dump($this->mr->getresult2($match->league,$match->season,$match->team2,$match->time,false,5));
		
		//dump($this->mr->getMatchPoint('英格兰超级联赛'));
		
		
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
	  $key=$mid;
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
		   sleep(rand(100,150)/100);
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
	  Cache::forget($key);
	  array_push($array_term,date("Ymd")-4,date("Ymd")-3,date("Ymd")-2,date("Ymd")-1,date("Ymd")+0);
	  Cache::put($key,$matches,2880);
	  return view('matchList',['matches'=>$matches,'terms'=>$array_term]);
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
   

	public function showOdd()
	{
		return view('odd');
	}
	public function getOdd(Request $request)
	{
		
	}
	
	}
