<?php
    namespace App\Lib;
    
    use App\Models\General;
    use Carbon\Carbon;
    use Goutte\Client as GoutteClient;
    use Symfony\Component\HttpClient\HttpClient;

    class Scraper
    {
        protected $client;
    
        public $results = [];
    
        public $savedItems = 0;
    
        public $status = 1;
    
        //public function __construct(GoutteClient $client)
        //{
         //   $this->client = $client;
        //}
    
        public function handle($url)
        {
            try {
                $client = new GoutteClient(HttpClient::create(['timeout' => 60000]));
                $crawler = $client->request('GET', $url);
                //$crawler = $this->client->request('GET', $url);
    
                $data = [];
                $controller = false;
                $crawler->filter('section.lastsection')->each(function ($node) use (&$data, $url, &$controller) {
                    if(($node->filter('span.f-size2')->count() > 0) && $node->filter('span.big-number')->count() > 0) {
                        for ($i=0; $i < $node->filter('span.f-size2')->count(); $i++) { 
                            
                            if ($node->filter('span.f-size2')->eq($i)->text() =="Confirmados"){
                                $data['confirmed'][] = $node->filter('span.big-number')->eq($i)->text();
                                
                            }
                            else if ($node->filter('span.f-size2')->eq($i)->text() =="Suspeitos"){
                                $data['suspects'][] = $node->filter('span.big-number')->eq($i)->text();
                            }
                            else if ($node->filter('span.f-size2')->eq($i)->text() =="Recuperados"){
                                $data['recovered'][] = $node->filter('span.big-number')->eq($i)->text();
                            }
                            else if ($node->filter('span.f-size2')->eq($i)->text() =="Óbitos"){
                                $data['deaths'][] = $node->filter('span.big-number')->eq($i)->text();
                            }
                        }
                        $controller = true;
                    }
                });
                if($controller)
                $this->save($data);

                $this->results = $data;
                
            } catch (\Exception $ex) {
                $this->status = $ex->getMessage();
            }
        }
    
        protected function save($data)
        {
            $checkExist = General::whereDate('created_at', Carbon::today())->first();
    
            if(!isset($checkExist->id)) {

                $general = new General();

                $general->confirmed = isset($data['confirmed']) ? $data['confirmed'][0] : "0";

                $general->suspects = isset($data['suspects']) ? $data['suspects'][0] : "0";

                $general->recovered = isset($data['recovered']) ? $data['recovered'][0] : "0";

                $general->deaths = isset($data['deaths']) ? $data['deaths'][0] : "0";

                $general->save();

                $this->savedItems++;
            }
            else {
                $checkExist->confirmed = isset($data['confirmed']) ? $data['confirmed'][0] : "0";

                $checkExist->suspects = isset($data['suspects']) ? $data['suspects'][0] : "0";

                $checkExist->recovered = isset($data['recovered']) ? $data['recovered'][0] : "0";

                $checkExist->deaths = isset($data['deaths']) ? $data['deaths'][0] : "0";

                $checkExist->save();
            }
        }
    
    
    }