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
		  $this->getMatchPoint2('意大利甲组联赛');
		  //DB::table('matchpoint')->chun
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
		DB::table('matches')->where('league','=',$league)->where('time','>','2010-09-18 22:00:00')->chunk(20000,function($matchs){
			foreach($matchs as $match){
				$limit=5;
				$mid=$match->mid;
			    //$match=Match::where('mid',$mid)->first();
			    $league=$match->league;
			    $round=$match->round;
			    $team1=$match->team1;
			    $team2=$match->team2;
			    $time=$match->time;
			    $season=$match->season;
				$m=$this->mr->getresult2($league,$season,$team1,$time,true,$limit);
				$mp=MatchPoint::firstOrCreate(['mid'=>$mid,'team1'=>$team1]);
				$mp->mid=$mid;
				$mp->point=$m['point'];
				$mp->goal=$m['goal'];
                $mp->goal_lose=$m['goal_lose'];
				$mp->expect=$m['expect'];
				$mp->percent=$m['percent'];
				
				$mp->point_same=$m['point_same'];
				$mp->goal_same=$m['goal_same'];
                $mp->goal_lose_same=$m['goal_lose_same'];
				$mp->expect_same=$m['expect_same'];
				$mp->percent_same=$m['percent_same'];
				
				$mp->fi_point=$m['fi_point'];
				$mp->fi_goal=$m['fi_goal'];
                $mp->fi_goal_lose=$m['fi_goal_lose'];
				$mp->fi_expect=$m['fi_expect'];
				$mp->fi_percent=$m['fi_percent'];
				
				$mp->fi_point_same=$m['fi_point_same'];
				$mp->fi_goal_same=$m['fi_goal_same'];
                $mp->fi_goal_lose_same=$m['fi_goal_lose_same'];
				$mp->fi_expect_same=$m['fi_expect_same'];
				$mp->fi_percent_same=$m['fi_percent_same'];
				
				if($mp->id==null)
				{
					$mp->team1=$team1;
					$mp->save();
				}
				else{
					$mp->update();
				}
				$m=$this->mr->getresult2($league,$season,$team2,$time,false,$limit);
				$mp=MatchPoint::firstOrCreate(['mid'=>$mid,'team1'=>$team2]);
				$mp->mid=$mid;
				$mp->point=$m['point'];
				dump($m['point']);
				$mp->goal=$m['goal'];
                $mp->goal_lose=$m['goal_lose'];
				$mp->expect=$m['expect'];
				$mp->percent=$m['percent'];
				
				$mp->point_same=$m['point_same'];
				$mp->goal_same=$m['goal_same'];
                $mp->goal_lose_same=$m['goal_lose_same'];
				$mp->expect_same=$m['expect_same'];
				$mp->percent_same=$m['percent_same'];
				
				$mp->fi_point=$m['fi_point'];
				$mp->fi_goal=$m['fi_goal'];
                $mp->fi_goal_lose=$m['fi_goal_lose'];
				$mp->fi_expect=$m['fi_expect'];
				$mp->fi_percent=$m['fi_percent'];
				
				$mp->fi_point_same=$m['fi_point_same'];
				$mp->fi_goal_same=$m['fi_goal_same'];
                $mp->fi_goal_lose_same=$m['fi_goal_lose_same'];
				$mp->fi_expect_same=$m['fi_expect_same'];
				$mp->fi_percent_same=$m['fi_percent_same'];
				if($mp->id==null)
				{
					//dump($mp);
					$mp->team1=$team2;
					$mp->point=$m['point'];
					$mp->save();
				}
				else{
					//$mp->id=$mp->where('mid',$mid)->where('team1',$team2)->first()->id;
					dump('exist');
					$mp->update();
				}
				dump($mid.' '.$team1.'vs'.$team2);
		}
		
	 });
	}
	
    public function getMatchPoint2($league)
	{
		DB::table('matches')->where('league','=',$league)->where('time','>','2006-07-01 22:00:00')->orderBy('time','asc')->chunk(20000,function($matchs){
			foreach($matchs as $match){
				$limit=5;
				$mid=$match->mid;
			    //$match=Match::where('mid',$mid)->first();
				$odd=Odd::where('mid',$mid)->where('init',1)->first();
				if($odd!=null)
				{
			    $league=$match->league;
			    $round=$match->round;
			    $team1=$match->team1;
			    $team2=$match->team2;
			    $time=$match->time;
			    $season=$match->season;
				$m=$this->mr->getresult2($league,$season,$team1,$time,true,$limit);
				$mp=MatchPoint::firstOrNew(['mid'=>$mid]);
				
				$mp->mid=$mid;
				$mp->team1=$team1;
				$mp->team2=$team2;
				
				$mp->sheng=$odd->sheng;
				$mp->ping=$odd->ping;
				$mp->fu=$odd->fu;
				
				$mp->season=$match->season;
				$mp->league=$match->league;
				$mp->round=$match->round;
				$mp->score=$match->score;
				$mp->result=$match->result;
				$mp->time=$match->time;
				

				$mp->point=$m['point'];
				$mp->goal=$m['goal'];
                $mp->goal_lose=$m['goal_lose'];
				$mp->expect=$m['expect'];
				$mp->percent=$m['percent'];
				
				$mp->point_same=$m['point_same'];
				$mp->goal_same=$m['goal_same'];
                $mp->goal_lose_same=$m['goal_lose_same'];
				$mp->expect_same=$m['expect_same'];
				$mp->percent_same=$m['percent_same'];
				
				$mp->fi_point=$m['fi_point'];
				$mp->fi_goal=$m['fi_goal'];
                $mp->fi_goal_lose=$m['fi_goal_lose'];
				$mp->fi_expect=$m['fi_expect'];
				$mp->fi_percent=$m['fi_percent'];
				
				$mp->fi_point_same=$m['fi_point_same'];
				$mp->fi_goal_same=$m['fi_goal_same'];
                $mp->fi_goal_lose_same=$m['fi_goal_lose_same'];
				$mp->fi_expect_same=$m['fi_expect_same'];
				$mp->fi_percent_same=$m['fi_percent_same'];
				
				$m=$this->mr->getresult2($league,$season,$team2,$time,false,$limit);
				$mp->point2=$m['point'];
				//dump($m['point']);
				$mp->goal2=$m['goal'];
                $mp->goal_lose2=$m['goal_lose'];
				$mp->expect2=$m['expect'];
				$mp->percent2=$m['percent'];
				
				$mp->point_same2=$m['point_same'];
				$mp->goal_same2=$m['goal_same'];
                $mp->goal_lose_same2=$m['goal_lose_same'];
				$mp->expect_same2=$m['expect_same'];
				$mp->percent_same2=$m['percent_same'];
				
				$mp->fi_point2=$m['fi_point'];
				$mp->fi_goal2=$m['fi_goal'];
                $mp->fi_goal_lose2=$m['fi_goal_lose'];
				$mp->fi_expect2=$m['fi_expect'];
				$mp->fi_percent2=$m['fi_percent'];
				
				$mp->fi_point_same2=$m['fi_point_same'];
				$mp->fi_goal_same2=$m['fi_goal_same'];
                $mp->fi_goal_lose_same2=$m['fi_goal_lose_same'];
				$mp->fi_expect_same2=$m['fi_expect_same'];
				$mp->fi_percent_same2=$m['fi_percent_same'];
				dump($mp->id);
				if($mp->id==null)
				{
					$mp->save();
				}
				else{
					dump('exist');
					$mp->update();
				}
				dump($mid.' '.$team1.'vs'.$team2);
				}
		}
		
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
