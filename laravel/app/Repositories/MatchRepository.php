<?php 
namespace App\Repositories;
use App\Match;
use App\Odd;
use App\Term;
use App\MatchPoint;
use Illuminate\Support\Facades\DB;

class MatchRepository  implements MatchRepositoryInterface{


    protected $l=6;
	public function matchMid($mid)
	{
		$match=new Match();
		$m=$match->where('mid',$mid)->first();
		return $m;
	}

	public function matchAnalysis2(Match $m)
	{
	 $odd=Match::find($m->id)->odd;
	 $mid=$m->mid;
	 $ma=new Match();
	 $mas= array();
	 $win=$odd->sheng;
	 $draw=$odd->ping;
	 $lose=$odd->fu;
    $league=$m->league;	 
	
	 $matchs=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result,B.updatetime from matches as A left join odds as B on A.mid=B.mid WHERE B.sheng =:sheng and B.ping=:ping and B.fu =:fu and B.init=1 and A.league=:league ORDER BY A.result',['sheng'=>$win,'ping'=>$draw,'fu'=>$lose,'league'=>$league]);
	 /*
	  $matchs=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result,B.updatetime from matches as A left join odds as B on A.mid=B.mid WHERE A.mid=:mid  and B.init=1',['mid'=>$mid]);
	  */
	 foreach($matchs as $match)
	 { 
		$league=$match->league;
		$mtime=$match->time;
		$mtime_init=$match->updatetime;
		$score=$match->score;
		$season=$match->season;
		$result=$match->result;
		$round=$match->round;
		$team1=$match->team1;
		$team2=$match->team2;
	    $t_home=$this->getresult2($league,$season,$team1,$mtime,true,$this->l);
	    $t_away=$this->getresult2($league,$season,$team2,$mtime,false,$this->l);
		$t_home_init=$this->getresult2($league,$season,$team1,$mtime_init,true,$this->l);
	    $t_away_init=$this->getresult2($league,$season,$team2,$mtime_init,false,$this->l);
			$match->current_point=$t_home['point'];
			$match->current_point2=$t_away['point'];
		    $match->points=$t_home['fi_point'];
			$match->points2=$t_away['fi_point'];
			$match->goal=$t_home['fi_goal'];
			$match->goal2=$t_away['fi_goal'];
			$match->goal_lose=$t_home['fi_goal_lose'];
			$match->goal2_lose=$t_away['fi_goal_lose'];
			$match->qiwang=$t_home['fi_expect'];
			$match->qiwang2=$t_away['fi_expect'];
			$match->percent=$percent=$match->qiwang==0?'none':number_format($match->points/$match->qiwang,2);
			$match->percent2=$percent2=$match->qiwang2==0?'none':number_format($match->points2/$match->qiwang2,2);
			$match->pointcz=number_format($match->points-$match->points2,2);
			$match->qiwangcz=number_format($match->qiwang-$match->qiwang2,2);
			$match->percentcz=number_format($match->percent-$match->percent2,2);

			$match->points_init=$t_home_init['fi_point'];
			$match->points2_init=$t_away_init['fi_point'];
		    $match->points_init=$t_home_init['fi_point'];
			$match->points2_init=$t_away_init['fi_point'];
			$match->qiwang_init=$t_home_init['fi_expect'];
			$match->qiwang2_init=$t_away_init['fi_expect'];
			$match->percent_init=$match->qiwang_init==0?'none':number_format($match->points_init/$match->qiwang_init,2);
			$match->percent2_init=$match->qiwang2_init==0?'none':number_format($match->points2_init/$match->qiwang2_init,2);
			array_push($mas,$match);
	 }
	 return $mas;
	}
	
	 /*
	 /zhanshi jinqi duizhan he wangji shuju
	 /0-wangji 1-zhu 2-ke moren5chang zonghe point
	 */
	 public function matchHistory($league,$team1,$team2,$season,$mtime,$n,$limit)
	{
		$mas=array();
		if($n==0)
		{
			$historys=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league   and  (team1=:team1 and team2=:team2) AND B.init=1 ORDER BY A.season',['league'=>$league,'team1'=>$team1,'team2'=>$team2]);
	     //$historys=Match::where('league',$league)->where('team1',$team1)->where('team2',$team2)->orderBy('season')->get();
		}
		else if($n==1)
		{
			$historys=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team1,'team2'=>$team1,'limit'=>$limit]);
			//dump($historys);
		}
		else if($n==2)
		{
			$historys=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team2,'team2'=>$team2,'limit'=>$limit]);
			//dump($historys);
		}
	   foreach($historys as $history)
	   {   
	 		$league=$history->league;
			$mtime=$history->time;
			$score=$history->score;
	 		$season=$history->season;
			$result=$history->result;
	 		$round=$history->round;
	 		$team=$history->team1;
	 		$team2=$history->team2;
	 		$points=0;
			$qiwang=0;
			$qiwang2=0;
	 		$points2=0;
	 		$point_home=0;
	 		$point_away=0;
	 		$goal=0;
			$goal2=0;
			$goal_lose=0;
			$goal2_lose=0;
	 		$goal_home=0;
	 		$goal_away=0;
			$w=$history->sheng;
			$d=$history->ping;
			$l=$history->fu;
	 		//$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'team2'=>$team]);
            //$math=$this->getMathPoint($sms,$team);
	 		//$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team2,'team2'=>$team2]); 
	 		//$math2=$this->getMathPoint($sms,$team2);
			$math=$this->getresult2($league,$season,$team,$mtime,true,$this->l);//近期成绩选择5场或者6场
			$math2=$this->getresult2($league,$season,$team2,$mtime,false,$this->l);
			$history->current_point=$math['point'];
			$history->current_point2=$math2['point'];
			$history->points=$math['fi_point'];
			$history->points2=$math2['fi_point'];
			$history->goal=$math['fi_goal'];
			$history->goal2=$math2['fi_goal'];
			$history->goal_lose=$math['fi_goal_lose'];
			$history->goal2_lose=$math2['fi_goal_lose'];
			$history->qiwang=$math['fi_expect'];
			$history->qiwang2=$math2['fi_expect'];
			$history->percent=$history->qiwang==0?'none':number_format($history->points/$history->qiwang,2);
			$history->percent2=$history->qiwang2==0?'none':number_format($history->points2/$history->qiwang2,2);
			$history->pointcz=number_format($history->points-$history->points2,2);
			$history->qiwangcz=number_format($history->qiwang-$history->qiwang2,2);
			$history->return=number_format(($w*$d*$l)/($w*$d+$w*$l+$l*$d),2);
			/*
			$odd=Match::find($history->id)->odd();
			if($history->sheng!='-')
		   {
			$history->w=$history->sheng;
            $history->d=$history->ping;
			$history->f=$history->fu;
		   }
		   else{
			$history->w='-';
            $history->d='-';
			$history->f='-';
		   }*/
			array_push($mas,$history);
			
			//dump($history);
	  }
	   return $mas;
	}
	  /*
	  tongji jinqi zhanji shuju
	  */
	 public function teamHistory($league,$season,$team,$mtime,$bool,$limit)
	 {
		 $expect=0;
		 $point=0;
		 $goal=0;
		 $goal_lose=0;
		 $percent=0;
		 $expect2=0;
		 $point2=0;
		 $goal2=0;
		 $goal_lose2=0;
		 $percent2=0;
		/*all limit team match*/
	   $sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'team2'=>$team,'limit'=>$limit]);
	   $math=$this->getMathPoint($sms,$team);
	   	 $expect=$math['expect'];
		 $point=$math['point'];
		 $goal=$math['goal'];
		 $goal_lose=$math['goal_lose'];
		 $percent=$math['percent'];
	   //dump($math['expect'].' '.$math['point'].' '.$math['goal'].' '.$math['goal_lose'].' '.$math['percent']);
	   /*zhu ke chang limit team match*/
	   if($bool){
			$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'limit'=>$limit]);;
			$math=$this->getMathPoint($sms,$team);
			//dump($math['expect'].' '.$math['point'].' '.$math['goal'].' '.$math['goal_lose'].' '.$math['percent']);
	   }
	   else{
		   $sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team2'=>$team,'limit'=>$limit]);;
		   $math=$this->getMathPoint($sms,$team);
		   //dump($math['expect'].' '.$math['point'].' '.$math['goal'].' '.$math['goal_lose'].' '.$math['percent']);   
	   }
	   	 $expect2=$math['expect'];
		 $point2=$math['point'];
		 $goal2=$math['goal'];
		 $goal_lose2=$math['goal_lose'];
		 $percent2=$math['percent'];

        return['expect'=>$expect,'point'=>$point,'goal'=>$goal,'goal_lose'=>$goal_lose,'percent'=>$percent,'expect2'=>$expect2,'point2'=>$point2,'goal2'=>$goal2,'goal_lose2'=>$goal_lose2,'percent2'=>$percent2];
	   
	 }

	  /*
	  jisuan dui zhen fenshu qiwang
	  */
	 public function getMathPoint($sms,$team)
	 {
		 $expect=0;
		 $point=0;
		 $goal=0;
		 $goal_lose=0;
		  foreach($sms as $sm){
			$expectArray=$this->getqiwang($sm->sheng,$sm->ping,$sm->fu);
			if($sm->team1==$team){$expect+=$expectArray[0];}
			else{$expect+=$expectArray[1];}
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team){$point+=3;$goal+=$sm->score_home;$goal_lose+=$sm->score_away;}	
                 else{$goal+=$sm->score_away;$goal_lose+=$sm->score_home;}				 
	 		   }
	 		 else if($sm->result=='平'){ $point+=1;$goal+=$sm->score_home;$goal_lose+=$sm->score_home;}
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team){$point+=3;$goal+=$sm->score_away;$goal_lose+=$sm->score_home;}
                 else{$goal+=$sm->score_home;$goal_lose+=$sm->score_away;}				 
	 		   }
	 		}
			$percent=$expect==0?'none':number_format($point/$expect,2);
			return ['goal'=>$goal,'goal_lose'=>$goal_lose,'expect'=>$expect,'point'=>$point,'percent'=>$percent];
	 }
 
    public function getodds($mid)
	{
	 return  Odd::where('mid',$mid)->orderBy('updatetime','asc')->get();
	}
    
	public function getpeifu($w,$d,$l)
	{
		return (1/(1/$w+1/$d+1/$l));
		
	}
	public function getgailv($w,$d,$l)
	{
		$p=$this->getpeifu($w,$d,$l);
		$w0=$p/$w;
		$d0=$p/$d;
		$l0=$p/$l;
		return [$w0,$d0,$l0];
	}

	public function getqiwang($w,$d,$l)
	{
	 $ep=3;
	 $gailv=$this->getgailv($w,$d,$l);
	 return $qiwang=[number_format($gailv[0]*$ep,2)+number_format($gailv[1],2),number_format($gailv[2]*$ep,2)+number_format($gailv[1],2)];
	}
	public function getSeasonMatch($team1,$season,$league,$time,$n)
	{
		if($n==0)
		{
		$matches=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result ,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and (A.team1=:team1 or A.team2=:team2) and B.init=1 and A.time<:time ORDER BY A.time desc',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time]);
		}
		else if($n==1)
		{
		$matches=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result ,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and (A.team1=:team1) and B.init=1 and A.time<:time ORDER BY A.time desc',['league'=>$league,'season'=>$season,'team1'=>$team1,'time'=>$time]);
		}
		else{
		$matches=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result ,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and ( A.team2=:team2) and B.init=1 and A.time<:time  ORDER BY A.time desc',['league'=>$league,'season'=>$season,'team2'=>$team1,'time'=>$time]);
		}
		$qw=0;
		$point=0;
		$count=count($matches);
		foreach($matches as $match)
		{
			$q=$this->getqiwang($match->sheng,$match->ping,$match->fu);
			if($match->team1==$team1){$qw+=$q[0];}
			else{$qw+=$q[1];}
			if($match->result=="胜"&$match->team1==$team1){$point+=3;}
			elseif($match->result=="负"&$match->team2==$team1){$point+=3;}
			elseif($match->result=="平"){$point+=1;}
		}
		$percent=$qw==0?0:number_format($point/$qw,2);
		return ['赛事'=>$league,'season'=>$season,'球队'=>$team1,'期望'=>$qw,'实际分数'=>$point,'qwz'=>$percent,'round'=>$count];
	}


	public function getCurrentMatch($team1,$season,$league,$round,$time)
	 {
        $matchess=[];
		$percents=[];
		$round2=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time]);
		$round=$round2[0]->c;
          $j=$round%5==0?5:$round%5;
		for($i=1;$i<=$round;$i+=$j)
		{
			if($i!=1){$j=5;}
		  // dump($j);
		   $round1=$i;
		   $round2=$round<$i+4?$round:$i+4;
		   $count=5;
		   $count=$j;
		   
		   $match=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result ,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and (A.team1=:team1 or A.team2=:team2)  and A.time<:time and B.init=1  ORDER BY A.time desc limit :count',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time,'count'=>$count]);
           //$match->team=$round1.'-'.$round2;
		   array_push($matchess,$match);
		   //dump($match);
		   $length=count($match);
		   if($length!=0)
			{
		    $time=$match[$length-1]->time;
			}
		}
		//dump($matchess);

		foreach($matchess as $matches)
		 {
			$qw=0;
			$point=0;
			$s=[];
			//dump($matches);
		foreach($matches as $match)
		{
			$count=count($matches);
			$q=$this->getqiwang($match->sheng,$match->ping,$match->fu);
			 if($match->team1==$team1){$qw+=$q[0];}
			 else{$qw+=$q[1];}
			 if($match->result=="胜"&$match->team1==$team1){$point+=3;}
			 elseif($match->result=="负"&$match->team2==$team1){$point+=3;}
			 elseif($match->result=="平"){$point+=1;}
			 //dump($match->team1.'vs'.$match->team2.':'.$match->score.':'.$point.':'.$qw);
		}
		//dump($point);
		//dump($qw);
		$percent=$qw==0?0:number_format($point/$qw,2);
		//$s=[$percent];
		array_push($percents,$percent);
		 }
		return($percents);
		//return ['赛事'=>$league,'season'=>$season,'球队'=>$team1,'期望'=>$qw,'实际分数'=>$point,'qwz'=>$percent,'round'=>$count];
		
	}

	public function getqiwangzu($mid)
    {
		
        $datas=[];
	    $datas2=[];
		$match=Match::where('mid',$mid)->first();
		$s=$match->season;
		$l=$match->league;
		$seasons=DB::select('SELECT season FROM matches where season<=:season and league=:league GROUP BY season ORDER BY season DESC LIMIT 7 ',['season'=>$s,'league'=>$l]);
		foreach($seasons as $season){
			$data=$this->getSeasonMatch($match->team1,$season->season,$match->league,$match->time,0);
			$data2=$this->getSeasonMatch($match->team2,$season->season,$match->league,$match->time,0);
			array_push($datas,$data);
			array_push($datas2,$data2);
		}
		return [$datas,$datas2];
		
		
	}
	public function getcurrentqiwangzu($mid)
    {
        $datas=[];
	    $datas2=[];
		$match=Match::where('mid',$mid)->first();
		$s=$match->season;
		$l=$match->league;
			$data=array_reverse($this->getCurrentMatch($match->team1,$match->season,$match->league,$match->round,$match->time));
			$data2=array_reverse($this->getCurrentMatch($match->team2,$match->season,$match->league,$match->round,$match->time));
		$length=count($data);
		$step=9-$length;
		for($i=0;$i<$step;$i++)
		{
		  array_push($data,null);
		}
		 $length=count($data2);
		$step=9-$length;
		for($i=0;$i<$step;$i++)
		{
		  array_push($data2,null);
		}
		return [$data,$data2];
	}
	public function getMatchPointCurrent($mid,$league,$season,$team1,$team2,$time)
	{
			$mp=new MatchPoint();
			$mp->mid=$mid;
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			$mp->team1=$team1;
			$mp->point=$w;
			if(Match::where('mid',$mid)->where('team1',$team1)->count()==0)
			{
			$mp->save();
			}
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team2,'team2'=>$team2,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			$mp->team1=$team2;
			$mp->point=$w;
			if(Match::where('mid',$mid)->where('team1',$team2)->count()==0)
			{
			$mp->save();
			}
	}

	  public function getresult($league,$season,$team,$time,$bool,$limit)
	{
		       $ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhude
				$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//kede
				$ds0=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team ) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhuping
				$ds1=DB::select('select count(*) as c from matches where league=:league and season=:season and (team2=:team ) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//keping
				$pointall=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds0)==0?0:$ds0[0]->c)+(count($ds1)==0?0:$ds1[0]->c);//defen
				if($bool){$point_same=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ds0)==0?0:$ds0[0]->c);}
				else{$point_same=(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds1)==0?0:$ds1[0]->c);}
				$r=$this->getSeasonMatch($team,$season,$league,$time,0);
				$expectall=$r['期望'];
				$percentall=$r['qwz'];
				//dump('得分:'.' '.$pointall.' '.$point_same);
				$g0=DB::select('select SUM(score_home) as c from matches where league=:league and season=:season and team1=:team and time<:time  group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhujin
				$g1=DB::select('select SUM(score_away) as c from matches where league=:league and season=:season and team2=:team and time<:time group by team2',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//kejin
				$gh=(count($g0)==0?0:($g0[0]->c));//jinqiu--zhu
				$ga=(count($g1)==0?0:($g1[0]->c));//jinqiu--ke
				$g=$gh+$ga;
	            $gs=$bool==true?$gh:$ga;
				//dump('进球'.' '.$g.' '.$gs);
				$gl0=DB::select('select SUM(score_away) as c from matches where league=:league and season=:season and team1=:team and time<:time  group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhushiqiu
				$gl1=DB::select('select SUM(score_home) as c from matches where league=:league and season=:season and team2=:team and time<:time group by team2',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//keshiqiu
				$glh=(count($gl0)==0?0:($gl0[0]->c));//shiqiu--zhu
				$gla=(count($gl1)==0?0:($gl1[0]->c));//shiqiu--ke
				$gl=$glh+$gla;//shiqiu
				$gsl=$bool==true?$glh:$gla;
				$r=$bool==true?$this->getSeasonMatch($team,$season,$league,$time,1):$this->getSeasonMatch($team,$season,$league,$time,2);
				$pointsame=$r['实际分数'];
				$expectsame=$r['期望'];
				$percentsame=$r['qwz'];
				//dump('失球'.' '.$gl.' '.$gsl);
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$time,'team1'=>$team,'team2'=>$team,'limit'=>$limit]);
				$math=$this->getMathPoint($sms,$team);
				$expect=$math['expect'];
				$point=$math['point'];
				$goal=$math['goal'];
				$goal_lose=$math['goal_lose'];
				$percent=$math['percent'];//jin 5 chang point
				//rdump($goal.' '.$goal_lose.' '.$point.' '.$expect.' '.$percent);
				if($bool){
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$time,'team1'=>$team,'limit'=>$limit]);;
				$math=$this->getMathPoint($sms,$team);
				}
				else{
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$time,'team2'=>$team,'limit'=>$limit]);;
				$math=$this->getMathPoint($sms,$team);
				}
				$expect2=$math['expect'];
				$point2=$math['point'];
				$goal2=$math['goal'];
				$goal_lose2=$math['goal_lose'];
				$percent2=$math['percent'];
				return ['point'=>$pointall,'expect'=>$expectall,'percent'=>$percentall,'goal'=>$g,'goal_lose'=>$gl,'point_same'=>$pointsame,'expect_same'=>$expectsame,'percent_same'=>$percentsame,'goal_same'=>$gs,'goal_same_lose'=>$gsl,'fi_point'=>$point,'fi_goal'=>$goal,'fi_goal_lose'=>$goal_lose,'fi_expect'=>$expect,'fi_percent'=>$percent,'fi_same_point'=>$point2,'fi_same_goal'=>$goal2,'fi_same_goal_lose'=>$goal_lose2,'fi_same_expect'=>$expect2,'fi_same_percent'=>$percent2];
		}
   
    public function getresult2($league,$season,$team,$time,$bool,$limit)
	{
		$i=0;
        $j=0;
		$point=0;
		$goal=0;
		$goal_lose=0;
		$expect=0;
		$percent=0;
		/****/
		$point_same=0;
		$goal_same=0;
		$goal_lose_same=0;
		$expect_same=0;
		$percent_same=0;
		/***/
		$fi_point=0;
		$fi_goal=0;
		$fi_goal_lose=0;
		$fi_expect=0;
		$fi_percent=0;
		/***/
		$fi_point_same=0;
		$fi_goal_same=0;
		$fi_goal_lose_same=0;
		$fi_expect_same=0;
		$fi_percent_same=0;
		$matches=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result,A.score_home,A.score_away,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and (A.team1=:team1 or A.team2=:team2) and A.time<:time and B.init=1  ORDER BY A.time desc',['league'=>$league,'season'=>$season,'team1'=>$team,'team2'=>$team,'time'=>$time]);
		//dump($matches);
		$count=count($matches);
		$limit=$count>$limit?$limit:$count;
		foreach($matches as $match)
		{
		    $q=$this->getqiwang($match->sheng,$match->ping,$match->fu);
			if($match->team1==$team){$expect+=$q[0];}
			else{$expect+=$q[1];}
			if($match->result=="胜"&$match->team1==$team){$point+=3;}
			elseif($match->result=="负"&$match->team2==$team){$point+=3;}
			elseif($match->result=="平"){$point+=1;}
			if($match->team1==$team){$goal+=$match->score_home;$goal_lose+=$match->score_away;}
			else{$goal+=$match->score_away;$goal_lose+=$match->score_home;}
            $i++;
			if($i==$limit)
			{
				$fi_point=$point; 
				$fi_goal=$goal;
				$fi_goal_lose=$goal_lose;
				$fi_expect=number_format($expect,2);				
			}

			if($bool)
			{    
				if($match->team1==$team)
				{
					$j++;
					$qs=$this->getqiwang($match->sheng,$match->ping,$match->fu);
					$expect_same+=$qs[0];
					if($match->result=="胜"){$point_same+=3;}
					elseif($match->result=="平"){$point_same+=1;}
					$goal_same+=$match->score_home;
					$goal_lose_same+=$match->score_away;	
					if($j<=$limit)
					{
						$fi_point_same=$point_same; 
						$fi_goal_same=$goal_same;
						$fi_goal_lose_same=$goal_lose_same;
						$fi_expect_same=number_format($expect_same,2);	
					}
				}
			}
           else
			   {
			   
				if($match->team2==$team)
				{
					$j++;
					$qs=$this->getqiwang($match->sheng,$match->ping,$match->fu);
					$expect_same+=$qs[1];
					if($match->result=="负"){$point_same+=3;}
					elseif($match->result=="平"){$point_same+=1;}
					$goal_same+=$match->score_away;
					$goal_lose_same+=$match->score_home;
					if($j<=$limit)
					{
						$fi_point_same=$point_same; 
						$fi_goal_same=$goal_same;
						$fi_goal_lose_same=$goal_lose_same;
						$fi_expect_same=number_format($expect_same,2);	
					}
				}
		   }
			
		
		}
		$percent=$expect==0?0:number_format($point/$expect,2);
		$percent_same=$expect_same==0?0:number_format($point_same/$expect_same,2);
		$fi_percent=$fi_expect==0?0:number_format($fi_point/$fi_expect,2);
		$fi_percent_same=$fi_expect_same==0?0:number_format($fi_point_same/$fi_expect_same,2);
		return ['point'=>$point,'goal'=>$goal,'goal_lose'=>$goal_lose,'expect'=>$expect,'percent'=>$percent,'point_same'=>$point_same,'goal_same'=>$goal_same,'goal_lose_same'=>$goal_lose_same,'expect_same'=>$expect_same,'percent_same'=>$percent_same,'fi_point'=>$fi_point,'fi_goal'=>$fi_goal,'fi_goal_lose'=>$fi_goal_lose,'fi_expect'=>$fi_expect,'fi_percent'=>$fi_percent,'fi_point_same'=>$fi_point_same,'fi_goal_same'=>$fi_goal_same,'fi_goal_lose_same'=>$fi_goal_lose_same,'fi_expect_same'=>$fi_expect_same,'fi_percent_same'=>$fi_percent_same];
		 
   }
		
	public function oddAnalysics($w1,$w2,$l)
	{
		 $mas= array();
		 /*
		 $matches=array();
		 $match_t=Match::where('league','like',$l.'%')->OrderBy('time','desc')->get();
		 foreach($match_t as $match)
		 {
			 $mid=$match->mid;
			 $odds=Odd::whereBetween('sheng',[$w1,$w2])->where('mid',$mid)->where('init',1)->first();
			 if($match!=null)
			 {
			 array_push($matches,$match);
			 }
		 }
	     dump($matches);	
		 */
		 $matches=DB::table('matches')->join('odds','matches.mid','=','odds.mid')->whereBetween('odds.sheng',[$w1,$w2])->where('matches.league','like',$l.'%')->orderBy('matches.time','desc')->take(1)->get();
		foreach($matches as $match)
		{
		$league=$match->league;
		$mtime=$match->time;
		$score=$match->score;
		$season=$match->season;
		$result=$match->result;
		$round=$match->round;
		$team1=$match->team1;
		$team2=$match->team2;
		
	    $t_home=$this->getresult2($league,$season,$team1,$mtime,true,5);
	    $t_away=$this->getresult2($league,$season,$team2,$mtime,false,5);
			$match->current_point=$t_home['point'];
			$match->current_point2=$t_away['point'];
		    $match->points=$t_home['fi_point'];
			$match->points2=$t_away['fi_point'];
			$match->goal=$t_home['fi_goal'];
			$match->goal2=$t_away['fi_goal'];
			$match->goal_lose=$t_home['fi_goal_lose'];
			$match->goal2_lose=$t_away['fi_goal_lose'];
			$match->qiwang=$t_home['fi_expect'];
			$match->qiwang2=$t_away['fi_expect'];
			$match->percent=$percent=$match->qiwang==0?'none':number_format($match->points/$match->qiwang,2);
			$match->percent2=$percent2=$match->qiwang2==0?'none':number_format($match->points2/$match->qiwang2,2);
			$match->pointcz=number_format($match->points-$match->points2,2);
			$match->qiwangcz=number_format($match->qiwang-$match->qiwang2,2);
			$match->percentcz=number_format($match->percent-$match->percent2,2);
			
			array_push($mas,$match);
	 }
	 return $mas;
	}
	
    /*待删除*/
	public function getMatchDif($mid)
	{
	
		
	}
	
	}