<?php 
namespace App\Repositories;

interface CrawlerRepositoryInterface{
	public function MidList();
	public function select($match);
	public function get();
	public function getall();
	public function getLeague($content);
	public function getFromLeague($content);
	
}