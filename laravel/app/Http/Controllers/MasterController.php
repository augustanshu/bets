<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use Goutte;
class MasterController extends Controller
{
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
	public function showMaster()
	{   
	    $crawler = Goutte::request('GET', 'http://live.zgzcw.com/');
		$count=Match::where('timeStage',date('Y-m-d'))->count();
	   if($count==0)
	   {
		  $result=array();
          //$crawler = Goutte::request('GET', 'http://live.zgzcw.com/');
	      $crawler->filter('tbody > .matchTr')->each(function ($node)
	     { 
		 $match=new Match;
	     $match->timeStage=date('Y-m-d');//时间点
	     $match->mid=$ri=$node->attr('matchid');//标识
		 if(Match::where('mid',$ri)->count()==0)
		 {
		  $match->matchType=$rm=$node->filter('td')->eq(1)->text() . "\n";//赛事
		  $match->round=$rm=$node->filter('td')->eq(2)->text() . "\n";//轮次
		  $match->time=$rt=$node->filter('td')->eq(3)->attr('date') . "\n";//时间
		  $match->status=$rs=$node->filter('td')->eq(4)->text() . "\n";//状态
		  $match->team1=$rh=$node->filter('td')->eq(5)->filter('a')->text() . "\n";//主队
          $match->team2=$ra=$node->filter('td')->eq(7)->filter('a')->text() . "\n";//客队
		  $match->save();
		 }
	   });
	   }
      return view('index',['matches'=>Match::where('timeStage',date('Y-m-d'))->get()]);           
	}
	
	
	public function seeMatch($mid)
	{
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
		
			 
	}
	public function test()
	{
		return view("test");
		 //http://symfony.com/doc/current/components/dom_crawler.html?any
		 
	}
}
