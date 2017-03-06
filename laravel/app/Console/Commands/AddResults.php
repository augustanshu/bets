<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Match;
use App\NoOdd;
use App\Odd;
use DB;
use App\MatchPoint;
class AddResults extends Command
{
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
    public function __construct()
    {
        parent::__construct();
    }

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
		  $this->getMatchPoint('西班牙甲组联赛');
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
}
