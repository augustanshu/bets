<?php

namespace App\Http\Controllers;
use App\Repositories\CrawlerRepositoryInterface;
use Illuminate\Http\Request;
use App\Match;
use Goutte;
use GuzzleHttp\Client as GuzzleClient;
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
	public function showMaster()
	{   
	echo $this->crawler->select(1724410);
	 
     
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
}
