<?php
namespace App\Repositories;
use App\Match;
interface MatchRepositoryInterface {

	public function matchMid($mid);
	public function matchHistory($league,$team1,$team2,$season,$mtime,$n,$limit);
	public function getodds($mid);
	public function getpeifu($w,$d,$l);
	public function getgailv($w,$d,$l);
	public function getqiwang($w,$d,$l);
	public function getSeasonMatch($team,$season,$league,$time,$n);
	public function getqiwangzu($mid);
	public function getCurrentMatch($team1,$season,$league,$round,$time);
	public function getcurrentqiwangzu($mid);
	public function getMatchPointCurrent($mid,$league,$season,$team1,$team2,$time);
	public function teamHistory($league,$season,$mtime,$team,$limit,$bool);
	public function getMathPoint($sms,$team);
	public function getresult($league,$season,$team,$time,$bool,$limit);
	public function getresult2($league,$season,$team,$time,$bool,$limit);
	public function oddAnalysics($w1,$w2,$l);

}