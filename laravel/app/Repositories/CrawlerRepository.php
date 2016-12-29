<?php 
namespace App\Repositories;
use App\Match;
use App\Odd;
use Goutte;
use Goutte\client;
use GuzzleHttp\Client as GuzzleClient;

class CrawlerRepository implements CrawlerRepositoryInterface{
	
  public function get()
  {
     
  }
  
  public function select($mid)
  {  
         $match=new Match;
		 $odd=new Odd;
		 $odd->mid=$mid;
         $count= $match->where('mid',$mid)->count();
         $goutteClient = new Client();
         $guzzleClient = new GuzzleClient(array(
           'timeout' => 60,
           ));
           $goutteClient->setClient($guzzleClient);
		   $jar = new \GuzzleHttp\Cookie\CookieJar;
	      $crawler = $goutteClient->request('GET', 'http://fenxi.zgzcw.com/'.$mid.'/bjop/',['cookies' => $jar]);
		  if($crawler->filter('title')->text()=='error...' ||$crawler->filter('title')->text()=='403 Forbidden'){return false;}
	      $league=$crawler->filter('.minibars > a')->eq(2)->text();
		  $match=new Match;
		  $match->mid=$mid;//标识号
		  $l=explode('20',$league);
		  //联赛 赛季
		  if(count($l)==3){
			  $match->league=mb_substr($l[0],0,-1);
			  $match->season=$l[1].$l[2];
		  } 
		  else{
			 	$match->league=mb_substr($l[0],0,-1);
				 $match->season=$l[1];
		  }
		  $match->round=$crawler->filter('.bfyc-duizhen-r > .round>h2')->attr('lc');//轮次
		  if($match->round=="d=bjop"){$match->round="--";}
		  $match->time=mb_substr($crawler->filter('.bfyc-duizhen-r > .date>span')->text(),5);//比赛时间		  
		  $match->team1=$crawler->filter('.host-name > a')->text();//主队
		  $match->team2=$crawler->filter('.visit-name >a')->text();//客队
		  $match->score=$crawler->filter('.logoVs > .vs-score ')->text();//比分
		  if(trim($match->score)!="VS"){$match->score=trim($crawler->filter('.logoVs > .vs-score >h1')->text());}
		  else{$match->score='-';}
	      if($match->time > date("Y-m-d h:m:s")){$match->status="未";}
		  else if($match->score!="0 - 0"){$match->status="完";}
		  //if($crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(1)->filter('dd')->eq(5)->text()!="分")
		  //{
		  //$match->rank1=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dt')->eq(1)->text();//排名1
		 // $match->rank2=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dt')->eq(2)->text();//排名2
		 // $team1=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(1)->filter('dd')->eq(0)->text();
		 // $team2=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(1)->filter('dd')->eq(0)->text();
		 // if($team1==$match->team1)
		     // {
			 // $match->point1=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(1)->filter('dd')->eq(5)->text();//积分1
			 // $match->point2=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(2)->filter('dd')->eq(5)->text();//积分1
			  //}
			  //else
			 // {
			 //$match->point2=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(1)->filter('dd')->eq(5)->text();//积分1
			  //$match->point1=$crawler->filter('.bfyc-duizhen-l > .paiming-normal')->filter('dl')->eq(2)->filter('dd')->eq(5)->text();//积分1 
			 // }
		  
		  //}
		  //dump ($node=$crawler->filter('.data-main > table')->filter('tr')->eq(2)->filter('td')->eq(1)->text());
		  $crawler->filter('.data-main > table')->filter('tr')->each(function($node,$i){
			     $company=$node->filter('td')->eq(1)->text();
				 if($company=="威廉希尔")
				 {
				    $odd=New Odd;
					$odd->cid=1;
					$odd->mid=$midd=explode('/',$node->filter('td')->eq(16)->filter('a')->attr('href'))[1];
					$odd->updatetime=$updatetimee=$node->attr('firsttime');
				    $odd->sheng=$node->filter('td')->eq(2)->text();
				    $odd->ping=$node->filter('td')->eq(3)->text();
				    $odd->fu=$node->filter('td')->eq(4)->text();
					 $odd_count=$odd->where('mid',$midd)->where('updatetime',$updatetimee)->count();
					 if($odd_count==0){$odd->save();}
					 else{$odd->update();}
					dump ($odd->mid.' '.$odd->updatetime.' '.$odd->sheng.' '.$odd->ping.' '.$odd->fu);
					$url=$node->filter('td')->eq(5)->filter('a')->attr('href');
			     	$url='http://fenxi.zgzcw.com'.$url;
					sleep(rand(1,1.2));
				    $crawler = Goutte::request('GET', $url);
				    $crawler->filter('table')->filter('tr')->each(function($node,$i){
					 if($i>1)
					 {
					 $u=explode('/',$node->geturi());
					 $odd=New Odd;
					 $odd->cid=1;
					 $odd->mid=$u[3];
					 $odd->updatetime=$updatetime=str_replace(array("↓","↑"),"",$node->filter('td')->eq(1)->text());
					 $odd->sheng=str_replace(array("↓","↑"),"",$node->filter('td')->eq(3)->text());
				     $odd->ping=str_replace(array("↓","↑"),"",$node->filter('td')->eq(4)->text());
				     $odd->fu=str_replace(array("↓","↑"),"",$node->filter('td')->eq(5)->text());
					 $odd_count=$odd->where('mid',$u[3])->where('updatetime',$updatetime)->count();
					 if($odd_count==0){$odd->save();}
					 else{$odd->update();}
					 dump ($odd->mid.' '.$odd->updatetime.' '.$odd->sheng.' '.$odd->ping.' '.$odd->fu);
					 }
				 });
				 }
		  });
		  if($count==0)
		  {
		     $match->save();
		  }
		  else
		  {
			 $match->update();
		  }
		  return($mid.': '.'联赛:'.$match->time.' '.$match->league.'['.$match->round.']'.$match->team1.'vs'.$match->team2.$match->score);
		  
  }
  

}