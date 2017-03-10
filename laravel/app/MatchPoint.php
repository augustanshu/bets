<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchPoint extends Model
{
    protected $table="matchPoint";
	protected $fillable = ['mid', 'point', 'goal', 'team1', 'goal_lose', 'expect', 'percent'];
}
