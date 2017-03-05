<?php
namespace App\Repositories;
use App\Match;
interface MatchRepositoryInterface {

	public function matchMid($mid);
	public function matchAnalysis(Match $m);
	public function matchHistory($league,$team1,$team2);
	public function getodds($mid);
	public function getpeifu($w,$d,$l);
	public function getgailv($w,$d,$l);
	public function getfenshu0($w,$d,$l);
	public function getfenshu1($w,$d,$l);
	public function getqiwang($w,$d,$l);
	public function getSeasonMatch($team,$season,$league);
	public function getqiwangzu($mid);
	public function getCurrentMatch($team1,$season,$league,$round,$time);
	public function getcurrentqiwangzu($mid);
	public function getMatchPoint($season);
	public function getMatchDif($mid);
	public function getMatchPointCurrent($mid,$league,$season,$team1,$team2,$time);
}