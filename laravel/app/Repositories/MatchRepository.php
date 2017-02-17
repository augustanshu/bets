<?php 
namespace App\Repositories;
use App\Match;
use App\Odd;
use App\Term;
use Illuminate\Support\Facades\DB;

class MatchRepository implements MatchRepositoryInterface{

	public function matchMid($mid)
	{
		$match=new Match();
		$m=$match->where('mid',$mid)->first();
		return $m;
	}
	 public function matchAnalysis(Match $m)
	 {
	 $odd=Match::find($m->id)->odd;
	 $mid=$m->mid;
	 $ma=new Match();
	 $mas= array();
	 $win=$odd->sheng;
	 $draw=$odd->ping;
	 $lose=$odd->fu;		 
	 $matchs=DB::select('select A.mid,A.league,A.season,A.round,A.score,A.time,A.team1,A.team2,A.result from matches as A left join odds as B on A.mid=B.mid WHERE B.sheng =:sheng and B.ping=:ping and B.fu =:fu and B.init=1  ORDER BY A.result ',['sheng'=>$win,'ping'=>$draw,'fu'=>$lose]);	
	 $COUNT_V=0;
	 $COUNT_D=0;
	 $COUNT_F=0;
	 foreach($matchs as $match)
	 {
		    if($match->result=="胜"){$COUNT_V++;}
			if($match->result=="平"){$COUNT_D++;}
			if($match->result=="负"){$COUNT_F++;}
	 		$league=$match->league;
			$score=$match->score;
	 		$season=$match->season;
			$result=$match->result;
	 		$round=$match->round;
	 		$team=$match->team1;
	 		$team2=$match->team2;
	 		$points=0;
	 		$points2=0;
	 		$point_home=0;
	 		$point_away=0;
	 		$goal=0;
			$goal2=0;
	 		$goal_home=0;
	 		$goal_away=0;
	 		$sms=DB::select('SELECT * FROM matches as A where A.league=:league and A.season=:season and A.round<:round AND (team1=:team1 OR team2=:team2)  LIMIT 6',['league'=>$league,'season'=>$season,'round'=>$round,'team1'=>$team,'team2'=>$team]);
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
	 		$sms=DB::select('SELECT * FROM matches as A where A.league=:league and A.season=:season and A.round<:round AND (team1=:team1 OR team2=:team2)  LIMIT 6',['league'=>$league,'season'=>$season,'round'=>$round,'team1'=>$team2,'team2'=>$team2]);
	 		foreach($sms as $sm){
	 		 if($sm->result=='胜'){
	 			 if($sm->team1==$team2){$points2+=3;$goal2+=$sm->score_home;}			 
	 		   }
	 		 else if($sm->result=='平'){
	 			 $points2+=1;$goal2+=$sm->score_home;		 
	 		   }
	 		 else if($sm->result=='负'){
	 			 if($sm->team2==$team2){$points2+=3;$goal2+=$sm->score_away;}		 
	 		   }
	 		}
			//dump($points);
			$match->points=$points;
			$match->points2=$points2;
			$match->goal=$goal;
			$match->goal2=$goal2;
			//dump($match);
			array_push($mas,$match);
			//dump($mas);
	    // dump($win .' '. $draw.' ' . $lose .' '.$season.' ' .$league.' ' .$round.'--' .'主队得分:'.$points.' '.'客队得分:'.$points2.'--'.'比分'.$match->score.' '.$match->result);
	    }
	 		
	       	 //$matchs=DB::select('SELECT * FROM matches where matches.league=:league AND matches.season=:season AND matches.round<:round AND (team1=:team OR team2=:team) LIMIT 6 ',['league'=>$league,'season'=>$season,'round'=>$round,'team'=>$team]);
	    //dump("胜".$COUNT_V.' '."平".$COUNT_D.' '."负".$COUNT_F);
          return $mas;
		  }
}