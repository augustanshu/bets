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

class CrawlerRequest extends Command
{
    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 7;  // 同时并发抓取

    private $users = ['2102107', '2102109', '2102110', '2102111',
                        '2102108', '2102113', '2102112'];

    protected $signature = 'test:crawler-request';
    protected $description = 'Command description';

    public function __construct(CrawlerRepositoryInterface $crawler)
    {
        parent::__construct();
		$this->crawler=$crawler;
    }

    public function handle()
    {
	   //php artisan test:crawler-request
	   for ($i =1724471; $i <=1730000 ; $i ++) { //1689200-1690532-1690740-1693016-1693635-1694545-1695104-1695955-1696592-1697368-1699473-1700940-1703312-1703746
	                                             //-1709399-1709488-1709609-1712465-1715102-1716431-1718042-1718350-1718771-1724397-1724400
       $this->info($this->crawler->select($i)); 
       sleep(rand(100,150)/100);	   
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