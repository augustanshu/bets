<?php

namespace App\Console\Commands;
use App\Repositories\MatchRepositoryInterface;
use Illuminate\Console\Command;
use App\Match;
use App\NoOdd;
use App\Odd;
use DB;
use App\MatchPoint;
class AddResults extends Command
{
	public function __construct(MatchRepositoryInterface $mr)
    {
		 parent::__construct();
	     $this->mr=$mr;
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:add-results';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		//php artisan command:add-results
		/*
      $matches=Match::where('id','=','2')->get();
	  Match::chunk(2, function ($matches) {
      foreach ($matches as $match) {
		  $this->info($match->id);
          $score=$match->score;
	      $scores=explode(' - ',$score);
	      if(count($scores)==2)
		  {
		  $home=$scores[0];
		  $away=$scores[1];
		  $match->score_home=$home;
		  $match->score_away=$away;
		  if($home==$away){$match->result="平";}
		  elseif($home>$away){$match->result="胜";}
		  elseif($home<$away){$match->result="负";}
		  $match->update();
	      }
	     $this->info($match->results);
         }
         });
		 php artisan command:add-results
		 */
		 /*
		  DB::table('matches')->orderBy('id')->chunk(200, function ($matches) {
			   foreach ($matches as $match) {
			    if(Odd::where('mid',$match->mid)->count()==0)
				{
					$no=new NoOdd();
					$no->mid=$match->mid;
					$no->league=$match->league;
					$no->season=$match->season;
					$no->save();
					$this->info($match->mid);
				}
			   }
		  });
		  */
		  $this->getMatchPoint2('1178860');
		  /*
		  $matches=DB::select('select count(*) as count,mid from matchpoint group by mid having count>1');
		  dump($matches);
		  foreach ($matches as $match)
		  {
			  //dump($match->team1);
			 DB::delete('delete  from matchpoint where');
		  }
		  */
    }
	
	public function getMatchPoint($league)
	{
		$matchs=Match::where('league',$league)->chunk(2000,function($matchs){
		foreach($matchs as $match)
		{
			//$match=$matchs;
			$mp=new MatchPoint();
			$mid=$mp->mid=$match->mid;
			$league=$match->league;
			$round=$match->round;
			$team1=$match->team1;
			$team2=$match->team2;
			$time=$match->time;
			$season=$match->season;
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team1,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team1,'team2'=>$team1,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			if(MatchPoint::where('mid',$mid)->where('team1',$team1)->count()==0)
			{
		      $mp=new MatchPoint();
			  $mp->mid=$mid;
			  $mp->team1=$team1;
			  $mp->point=$w;
			  $mp->save();
			}
			else
			{
				$mp=MatchPoint::where('mid',$mid)->where('team1',$team1)->first();
			    $mp->point=$w;
				$mp->update();
				dump($mid.$team1.'exist!');
			}
			//dump($ds);
			//$r=($ws0[0]+$ws1[1])*3+$ds[0];
			//dump($w);
			dump( $league.' '.$season.' '.$round.' '.$team1.' '.$w);
			$ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team2,'time'=>$time]);
			$ds=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 or team2=:team2) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team2,'team2'=>$team2,'time'=>$time]);
			$w=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds)==0?0:$ds[0]->c);
			if(MatchPoint::where('mid',$mid)->where('team1',$team2)->count()==0)
			{
			  $mp=new MatchPoint();
			  $mp->mid=$mid;
			  $mp->team1=$team2;
			  $mp->point=$w;
			  $mp->save();
			}
			else
			{
				$mp=MatchPoint::where('mid',$mid)->where('team1',$team2)->first();
			    $mp->point=$w;
				$mp->update();
				dump($mid.$team2.'exist!');
			}
			dump( $league.' '.$season.' '.$round.' '.$team2.' '.$w);
		}
		});
	}

    public function getMatchPoint2($mid)
	{
		$limit=5;
		DB::table('matchpoint')->where('mid',$mid)->chunk(2000,function($matchs){
			foreach($matchs as $match){
				$match=Match::where('mid',$match->mid)->first();
				$mid=$mp->mid=$match->mid;
			    $league=$match->league;
			    $round=$match->round;
			    $team1=$match->team1;
			    $team2=$match->team2;
			    $time=$match->time;
			    $season=$match->season;
				dump($this->getresult($league,$season,$team,$time,$bool));
				
			
			
		});
	}

    public function getresult($league,$season,$team,$time,$bool)
	{
		       $ws0=DB::select('select count(*) as c from matches where league=:league and season=:season and team1=:team and time<:time and result="胜" group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhude
				$ws1=DB::select('select count(*) as c from matches where league=:league and season=:season and team2=:team and time<:time and result="负" group by team2',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//kede
				$ds0=DB::select('select count(*) as c from matches where league=:league and season=:season and (team1=:team1 ) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team,'team2'=>$team,'time'=>$time]);//zhuping
				$ds1=DB::select('select count(*) as c from matches where league=:league and season=:season and (team2=:team1 ) and time<:time and result="平"',['league'=>$league,'season'=>$season,'team1'=>$team,'team2'=>$team,'time'=>$time]);//keping
				$goal=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds0)==0?0:$ds0[0]->c)+(count($ds1)==0?0:$ds1[0]->c);//defen
				if($bool){$goal_same=(count($ws0)==0?0:($ws0[0]->c)*3)+(count($ds0)==0?0:$ds0[0]->c);}
				if($false){$goal_same=(count($ws1)==0?0:($ws1[0]->c)*3)+(count($ds1)==0?0:$ds1[0]->c);}
				
				$g0=DB::select('select SUM(score_home) as c from matches where league=:league and season=:season and team1=:team and time<:time  group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhujin
				$g1=DB::select('select SUM(score_away) as c from matches where league=:league and season=:season and team2=:team and time<:time group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//kejin
				$gh=($count($g0)==0?0:($g0[0]->c));//jinqiu--zhu
				$ga=($count($g1)==0?0:($g1[0]->c));//jinqiu--ke
				$g=$gh+$ga;
	            $gs=$bool==true?$gh:$ga;
				
				$gl0=DB::select('select SUM(score_away) as c from matches where league=:league and season=:season and team1=:team and time<:time  group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//zhushiqiu
				$gl1=DB::select('select SUM(score_home) as c from matches where league=:league and season=:season and team2=:team and time<:time group by team1',['league'=>$league,'season'=>$season,'team'=>$team,'time'=>$time]);//keshiqiu
				$glh=($count($gl0)==0?0:($gl0[0]->c));//shiqiu--zhu
				$gla=($count($gl1)==0?0:($gl1[0]->c));//shiqiu--ke
				$gl=$glh+$gla;//shiqiu
				$gsl=$bool==true?$glh:$gla;
				
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1 OR team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$time,'team1'=>$team,'team2'=>$team,'limit'=>$limit]);
				$math=$this->getMathPoint($sms,$team);
				$expect=$math['expect'];
				$point=$math['point'];
				$goal=$math['goal'];
				$goal_lose=$math['goal_lose'];
				$percent=$math['percent'];//jin 5 chang point
				
				if($bool){
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team1=:team1) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team1'=>$team,'limit'=>$limit]);;
				$math=$this->getMathPoint($sms,$team);
				}
				else{
				$sms=DB::select('SELECT * FROM matches as A left join odds as B on A.mid=B.mid where A.league=:league and A.season=:season and A.time<:time AND (team2=:team2) AND B.init=1 ORDER BY A.time desc  LIMIT :limit',['league'=>$league,'season'=>$season,'time'=>$mtime,'team2'=>$team,'limit'=>$limit]);;
				$math=$this->getMathPoint($sms,$team);
				}
				$expect2=$math['expect'];
				$point2=$math['point'];
				$goal2=$math['goal'];
				$goal_lose2=$math['goal_lose'];
				$percent2=$math['percent'];
				return ['goal'=>$goal,'goal_lose'=>$gl,'goal_same'=>$gs,'goal_same_lose'=>$gls,'fi_goal'=>$goal,'fi_goal_lose'=>$goal_lose,'fi_expect'=>$expect,'fi_percent'=>$percent,'fi_same_goal'=>$goal2,'fi_same_goal_lose'=>$goal_lose2,'fi_same_expect'=>$expect2,'fi_same_percent'=>$percent2];
		}
	}	
}
