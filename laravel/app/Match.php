<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table="matches";
	protected $fillable=["id","mid","league","round","time","status","team1","team2"];
	 public function odd()
	 {
		 return $this->hasOne('App\Odd','mid','mid');
	 }
	 public function getRouteKeyName()
	 {
		 return 'mid';
	 }
}
