<?php namespace App\Console\Commands;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
use Goutte;
use App\Match;
use App\Repositories\CrawlerRepositoryInterface;
use Illuminate\Console\Command;

class MultithreadingRequest extends Command
{
    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 7;  // 同时并发抓取

    private $users = ['2102107', '2102109', '2102110', '2102111',
                        '2102108', '2102113', '2102112'];

    protected $signature = 'test:multithreading-request';
    protected $description = 'Command description';

    public function __construct(CrawlerRepositoryInterface $crawler)
    {
        parent::__construct();
		$this->crawler=$crawler;
    }

    public function handle()
    {
	   for ($i = 2103107; $i <= 2106107; $i ++) {
       $this->info($this->crawler->select($i)); 
       sleep(1);	   
		}	   
    }

    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount){
            $this->counter++;
            return;
        }
        $this->info("end");
    }
}