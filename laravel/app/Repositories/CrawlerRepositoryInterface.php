<?php 
namespace App\Repositories;

interface CrawlerRepositoryInterface{
	public function MidList();
	public function MidList2($t);
	public function select($match);
	public function selectNoDump($mid);
	public function get();
	public function getall();
	public function getLeague($content);
	public function getFromLeague($content);
	
}