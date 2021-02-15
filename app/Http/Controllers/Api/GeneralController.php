<?php

    namespace App\Http\Controllers\Api;
    use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    
    use Goutte\Client;
    use App\Lib\Scraper;

    use App\Models\General;
    use App\Models\Config;

    class GeneralController extends Controller
    {
        private $scraper;
        private $client;

        public function __construct(Scraper $scraper, Client $client)
        {
            $this->client = $client;
            $this->scraper = $scraper;
        }

        public function general(){
            $configs = Config::first();
            $status = 2; 
            if ($configs->auto_update ==1){
//                $this->scraper($this->client);
                $this->scraper->handle($configs->source);
                $status = $this->scraper->status == 1? 1: 2;
            }
            $data = General::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->first()->setHidden(['id']);
         
            return response()->json([
                'success' => true,
                'message' => "Operação realizada com sucesso.", 
                'data' => $data,
                'status' => $status,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
            ]);
        }

        public function report(){
//            $scraper = new Scraper(new Client());
 
            $this->scraper->handle(Config::first()->source);
            $data = General::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->get();
         
            return response()->json([
                'success' => true,
                'message' => "Operação realizada com sucesso.", 
                'data' => $data,
                'status' => $this->scraper->status == 1? 1: 2,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
            ]);
        }
      
        
    }
