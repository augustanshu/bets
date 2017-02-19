<?php
namespace App\Repositories;
use App\Match;
interface MatchRepositoryInterface{
	public function matchMid($mid);
	public function matchAnalysis(Match $m);
	public function getodds($mid);
}