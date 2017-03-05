<?php namespace
 App\Console\Commands;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
use Goutte;
use App\Match;
use App\Repositories\CrawlerRepositoryInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
class CrawlerRequest extends Command
{

    protected $signature = 'test:crawler-request';
    protected $description = 'Command description';

    public function __construct(CrawlerRepositoryInterface $crawler)
    {
        parent::__construct();
		$this->crawler=$crawler;
    }

    public function handle()
    {    
	   /*
	     1689200-1738969
	     1755377-1811855
		12-13 yingchao:1218600-113719
		14-15 yingchao:1871650-1872055 
		15-16 yingchao:1985422-1986468
		15-16 xijia:2004061-2004535
		14-15 xijia:1896224-1897192
		13-14
		*/
		
		/*
		$match=Match::where('mid','>','0')->orderBy('id','desc')->first();
		$end=$match->mid+200000;
	   php artisan test:crawler-request
	   */
	   /*
	   for ($i =1812558; $i <=1821855 ; $i ++) { 
	   
	   $count= Match::where('mid',$i)->count();   
       if($count==0)
	   {		   
       $this->info($this->crawler->select($i)); 
       sleep(rand(100,150)/100);
	   }
      */
	  
	   
	    $content=Storage::get('1.php');
		//dump($content);
		$this->crawler->getDoumentList($content);
		
		/*

			$files = Storage::allfiles('/match');
			dump($files);
			foreach($files as $content)
			{
			
			  $content=Storage::get($content);
			  	//dump($content);
			  $this->crawler->getFromLeague($content);
			}	
			*/
    }

    public function countedAndCheckEnded()
    {

    }
}