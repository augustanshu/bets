<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Match;
use App\NoOdd;
use App\Odd;
use DB;
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
    }
}
