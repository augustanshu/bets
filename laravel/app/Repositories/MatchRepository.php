<?php 
namespace App\Repositories;
use App\Match;
use App\Odd;
use App\Term;
use App\MatchPoint;
use Illuminate\Support\Facades\DB;

class MatchRepository  implements MatchRepositoryInterface{


	public function matchMid($mid)
	{
		$match=new Match();
		$m=$match->where('mid',$mid)->first();
		return $m;
	}
	public function matchHistory($league,$team1,$team2)
	{
		$mas=array();
	   $historys=Match::where('league',$league)->where('team1',$team1)->where('team2',$team2)->orderBy('season')->get();
	   //$historys=Match::where('league',$league)->where('team1',$team2)->where('team2',$team1)->orderBy('season')->get();
	   //array_push($history,$historys);
	   foreach($historys as $history)
	   {    //dump($match->team1.$match->team2);
		    //if($history->result=="胜"){$COUNT_V++;}
			//if($history->result=="平"){$COUNT_D++;}
			//if($history->result=="负"){$COUNT_F++;}
	 		$league=$history->league;
			$mtime=$history->time;
			$score=$history->score;
	 		$season=$history->season;
			$result=$history->result;
	 		$round=$history->round;
	 		$team=$history->team1;
	 		$team2=$history->team2;
	 		$points=0;
			//$fenshu=0;
			//$fenshu2=0;
			//$fenshuu=0;
			//$fenshuu2=0;
			$qiwang=0;
			$qiwang2=0;			
	 		$points2=0;
	 		$point_home=0;
	 		$point_away=0;
	 		$goal=0;
			$goal2=0;
	 		$goal_home=0;
	 		$goal_away=0;
	 		$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'team2'=>$team]);
	 		foreach($sms as $sm){
			$f=$this->getfenshu0($sm->sheng,$sm->ping,$sm->fu);
			$f2=$this->getfenshu1($sm->sheng,$sm->ping,$sm->fu);
			$q=$this->getqiwang($sm->sheng,$sm->ping,$sm->fu);
			//dump($q);
			if($sm->team1==$team){$qiwang+=$q[0];}
			else{$qiwang+=$q[1];}
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team){$points+=3;$goal+=$sm->score_home;}	
                 else{$goal+=$sm->score_away;}				 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points+=1;$goal+=$sm->score_home;
				 if($sm->team1==$team){}
				 else{}	 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team){$points+=3;$goal+=$sm->score_away;}
                 else{$goal+=$sm->score_home;}				 
	 		   }
	 		}
	 		$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team2,'team2'=>$team2]); 
	 		foreach($sms as $sm){
			//dump($sm);
			//$f=$this->getfenshu0($sm->sheng,$sm->ping,$sm->fu);
			$q=$this->getqiwang($sm->sheng,$sm->ping,$sm->fu);
			if($sm->team1==$team2){$qiwang2+=$q[0];}
			else{$qiwang2+=$q[1];}
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team2){$points2+=3;$goal2+=$sm->score_home;}	
                 else{$goal2+=$sm->score_away;}					 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points2+=1;$goal2+=$sm->score_home;
                if($sm->team1==$team2){}
				 else{}				 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team2){$points2+=3;$goal2+=$sm->score_away;}		
                else{$goal2+=$sm->score_away;}					 
	 		   }
	 		}
			$history->points=$points;
			$history->points2=$points2;
			$history->goal=$goal;
			$history->goal2=$goal2;
			//$history->fenshu=$fenshu;
			//$history->fenshu2=$fenshu2;
			//$history->fenshuu=$fenshuu;
			//$history->fenshuu2=$fenshuu2;
			$history->qiwang=$qiwang;
			$history->qiwang2=$qiwang2;
			$history->percent=$qiwang==0?'none':number_format($points/$qiwang,2);
			$history->percent2=$qiwang2==0?'none':number_format($points2/$qiwang2,2);
			$history->pointcz=number_format($points-$points2,2);
			$history->qiwangcz=number_format($qiwang-$qiwang2,2);
			$odd=Match::find($history->id)->odd;
			if($odd!=null)
		   {
			$history->w=$odd->sheng;
            $history->d=$odd->ping;
			$history->f=$odd->fu;
		   }
		   else{
			$history->w='-';
            $history->d='-';
			$history->f='-';
		   }
			array_push($mas,$history);
	  }
	   return $mas;
	}
	
	public function matchAnalysis(Match $m)
	 {
	 $ep=3;
	 $odd=Match::find($m->id)->odd;
	 $mid=$m->mid;
	 $ma=new Match();
	 $mas= array();
	 $win=$odd->sheng;
	 $draw=$odd->ping;
	 $lose=$odd->fu;		 
	 $matchs=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result from matches as A left join odds as B on A.mid=B.mid WHERE B.sheng =:sheng and B.ping=:ping and B.fu =:fu and B.init=1  ORDER BY A.result',['sheng'=>$win,'ping'=>$draw,'fu'=>$lose]);	
	 $COUNT_V=0;
	 $COUNT_D=0;
	 $COUNT_F=0;
	 foreach($matchs as $match)
	 {      //dump($match->team1.$match->team2);
		    if($match->result=="胜"){$COUNT_V++;}
			if($match->result=="平"){$COUNT_D++;}
			if($match->result=="负"){$COUNT_F++;}
	 		$league=$match->league;
			$mtime=$match->time;
			$score=$match->score;
	 		$season=$match->season;
			$result=$match->result;
	 		$round=$match->round;
	 		$team=$match->team1;
	 		$team2=$match->team2;
	 		$points=0;
			$fenshu=0;
			$fenshu2=0;
			$fenshuu=0;
			$fenshuu2=0;
			$qiwang=0;
			$qiwang2=0;			
	 		$points2=0;
	 		$point_home=0;
	 		$point_away=0;
	 		$goal=0;
			$goal2=0;
	 		$goal_home=0;
	 		$goal_away=0;
	 		$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'team2'=>$team]);
	 		foreach($sms as $sm){
			$f=$this->getfenshu0($sm->sheng,$sm->ping,$sm->fu);
			$f2=$this->getfenshu1($sm->sheng,$sm->ping,$sm->fu);
			$q=$this->getqiwang($sm->sheng,$sm->ping,$sm->fu);
			//dump($q);
			if($sm->team1==$team){$qiwang+=$q[0];}
			else{$qiwang+=$q[1];}
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team){$points+=$ep;$goal+=$sm->score_home;$fenshu+=$f[0][0];$fenshuu+=$f2[0][0];}	
                 else{$goal+=$sm->score_away;}				 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points+=1;$goal+=$sm->score_home;
				 if($sm->team1==$team){$fenshu+=$f[0][1];$fenshuu+=$f2[0][1];}
				 else{$fenshu+=$f[1][1];$fenshuu+=$f2[1][1];}	 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team){$points+=$ep;$goal+=$sm->score_away;$fenshu+=$f[1][0];$fenshuu+=$f2[1][0];}
                 else{$goal+=$sm->score_home;}				 
	 		   }
	 		}
	 		$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT 5',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team2,'team2'=>$team2]); 
	 		foreach($sms as $sm){
			//dump($sm);
			$f=$this->getfenshu0($sm->sheng,$sm->ping,$sm->fu);
			$q=$this->getqiwang($sm->sheng,$sm->ping,$sm->fu);
			if($sm->team1==$team2){$qiwang2+=$q[0];}
			else{$qiwang2+=$q[1];}
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team2){$points2+=$ep;$goal2+=$sm->score_home;$fenshu2+=$f[0][0];$fenshuu2+=$f2[0][0];}	
                 else{$goal2+=$sm->score_away;}					 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points2+=1;$goal2+=$sm->score_home;
                if($sm->team1==$team2){$fenshu2+=$f[0][1];$fenshuu2+=$f2[0][1];}
				 else{$fenshu2+=$f[1][1];$fenshuu2+=$f2[1][1];}				 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team2){$points2+=$ep;$goal2+=$sm->score_away;$fenshu2+=$f[1][0];$fenshuu2+=$f2[1][0];}		
                else{$goal2+=$sm->score_away;}					 
	 		   }
	 		}
			$match->points=$points;
			$match->points2=$points2;
			$match->goal=$goal;
			$match->goal2=$goal2;
			$match->fenshu=$fenshu;
			$match->fenshu2=$fenshu2;
			$match->fenshuu=$fenshuu;
			$match->fenshuu2=$fenshuu2;
			$match->qiwang=$qiwang;
			$match->qiwang2=$qiwang2;
			$match->percent=$percent=$qiwang==0?'none':number_format($points/$qiwang,2);
			$match->percent2=$percent2=$qiwang2==0?'none':number_format($points2/$qiwang2,2);
			$match->pointcz=number_format($points-$points2,2);
			$match->qiwangcz=number_format($qiwang-$qiwang2,2);
			$match->percentcz=number_format($percent-$percent2,2);
			array_push($mas,$match);
	  }
          return $mas;
		  }
	 

    public function getodds($mid)
	{
	 return  Odd::where('mid',$mid)->get();
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
	public function getfenshu0($w,$d,$l)
	{
		$ep=3;
	 $gailv=$this->getgailv($w,$d,$l);
	 /*
	 $w_home=3+3*(1-$gailv[0]);
	 $w_away=3+3*(1-$gailv[2]);
	 $d_home=$gailv[0]>=$gailv[2]?1-$gailv[1]:1+$gailv[1];
	 $d_away=$gailv[0]>=$gailv[2]?1+$gailv[1]:1-$gailv[1];
	 */
	 $w_home=(number_format($ep+$ep*(1-$gailv[0]),2));
	 $w_away=(number_format($ep+$ep*(1-$gailv[2]),2));
	 $d_home=(number_format($gailv[0]>=$gailv[2]?$gailv[1]:1+$gailv[1],2));
	 $d_away=(number_format($gailv[0]>=$gailv[2]?1+$gailv[1]:$gailv[1],2));
	 return [[$w_home,$d_home,0],[$w_away,$d_away,0]];
	}
	
	public function getfenshu1($w,$d,$l)
	{
	 $gailv=$this->getgailv($w,$d,$l);
	 
	 $w_home=(number_format(3+2*(1-$gailv[0]),2));
	 $w_away=(number_format(3+2*(1-$gailv[2]),2));
	 $d_home=(number_format($gailv[0]>=$gailv[2]?1+$gailv[1]:1+$gailv[1],2));
	 $d_away=(number_format($gailv[0]>=$gailv[2]?1+$gailv[1]:1+$gailv[1],2));
	 
	 return [[$w_home,$d_home,0],[$w_away,$d_away,0]];
	}
	public function getqiwang($w,$d,$l)
	{
	 $ep=3;
	 $gailv=$this->getgailv($w,$d,$l);
	 return $qiwang=[number_format($gailv[0]*$ep,2)+number_format($gailv[1],2),number_format($gailv[2]*$ep,2)+number_format($gailv[1],2)];
	}
	public function getSeasonMatch($team1,$season,$league)
	{
		$matches=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result ,B.sheng,B.ping,B.fu from matches as A left join odds as B on A.mid=B.mid WHERE A.league=:league and A.season=:season and (A.team1=:team1 or A.team2=:team2) and B.init=1  ORDER BY A.round',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1]);
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
			$data=$this->getSeasonMatch($match->team1,$season->season,$match->league);
			$data2=$this->getSeasonMatch($match->team2,$season->season,$match->league);
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
		//$seasons=DB::select('SELECT season FROM matches where season<=:season and league=:league GROUP BY season ORDER BY season DESC LIMIT 7 ',['season'=>$s,'league'=>$l]);
		//foreach($seasons as $season){
			$data=array_reverse($this->getCurrentMatch($match->team1,$match->season,$match->league,$match->round,$match->time));
			$data2=array_reverse($this->getCurrentMatch($match->team2,$match->season,$match->league,$match->round,$match->time));
			//array_push($datas,$data);
			//array_push($datas2,$data2);
		//}
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
		//dump($data);
		//dump($data2);
		return [$data,$data2];
		
		
	}
	public function getMatchDif($mid)
	{
		//$match=Match:where('mid',$mid)->first();
		//$league=$match->league;
		//$season=$match->season;
		//$round=$match->round;
		//$time=$match->time;
		//$match_home=$match->team1;
		//$match_away=$match->team2;
		
	}
	public function getMatchPoint($league)
	{
		/*
		$seasons=DB::select('select season from matches where league=:league group by season',['league'=>$league]);
		foreach($seasons as $season)
		{
			$season=$season->season;
			$teams=DB::select('select team1 from matches where league=:league and season=:season group by team1',['league'=>$league,'season'=>$season]);
			foreach($teams as $team)
			{
				
			}
		}
		*/
		$matchs=Match::where('league',$league)->where('round','38')->get();
		foreach($matchs as $match)
		{
			//$match=$matchs;
			$mp=new MatchPoint();
			$mp->mid=$match->mid;
			$round=$match->round;
			$team1=$match->team1;
			$team2=$match->team2;
			$time=$match->time;
			$season=$match->season;
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			$mp->team1=$team1;
			$mp->point=$w;
			$mp->save();
			//dump($ds);
			//$r=($ws0[0]+$ws1[1])*3+$ds[0];
			//dump($w);
			dump( $league.' '.$season.' '.$round.' '.$team1.' '.$w);
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team2,'team2'=>$team2,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			//return $seasons;
			$mp->team1=$team2;
			$mp->point=$w;
			$mp->save();
			dump( $league.' '.$season.' '.$round.' '.$team2.' '.$w);
		}
	}
	public function getMatchPointCurrent($mid,$league,$season,$team1,$team2,$time)
	{
		/*
		$seasons=DB::select('select season from matches where league=:league group by season',['league'=>$league]);
		foreach($seasons as $season)
		{
			$season=$season->season;
			$teams=DB::select('select team1 from matches where league=:league and season=:season group by team1',['league'=>$league,'season'=>$season]);
			foreach($teams as $team)
			{
				
			}
		}
		*/
		//$matchs=Match::where('league',$league)->where('round','38')->get();
		//foreach($matchs as $match)
		//{
			//$match=$matchs;
			$mp=new MatchPoint();
			$mp->mid=$mid;
			//$round=$match->round;
			//$team1=$match->team1;
			//$team2=$match->team2;
			//$time=$match->time;
			//$season=$match->season;
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
			//dump($ds);
			//$r=($ws0[0]+$ws1[1])*3+$ds[0];
			//dump($w);
			//dump( $league.' '.$season.' '.$round.' '.$team1.' '.$w);
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team2,'team2'=>$team2,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			//return $seasons;
			$mp->team1=$team2;
			$mp->point=$w;
			if(Match::where('mid',$mid)->where('team1',$team2)->count()==0)
			{
			$mp->save();
			}
			//dump( $league.' '.$season.' '.$round.' '.$team2.' '.$w);
		//}
	}
}