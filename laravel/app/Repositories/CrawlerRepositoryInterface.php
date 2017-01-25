<?php 
namespace App\Repositories;

interface CrawlerRepositoryInterface{
	//public function select();
	//public function select($start,$end);
	public function select($match);
	public function get();
	public function getLeague($content);
	public function getFromLeague($content);
	
}