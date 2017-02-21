<?php
namespace App\Repositories;
use App\Match;
interface MatchRepositoryInterface{

	public function matchMid($mid);
	public function matchAnalysis(Match $m);
	public function getodds($mid);
	public function getpeifu($w,$d,$l);
	public function getgailv($w,$d,$l);
	public function getfenshu0($w,$d,$l);
	public function getfenshu1($w,$d,$l);
	public function getqiwang($w,$d,$l);
}