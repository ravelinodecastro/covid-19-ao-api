<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Carbon\Carbon;
    use Goutte\Client;
    use App\Lib\Scraper;

    use App\Models\General;

    class WelcomeController extends Controller
    {
  
        public function index(){
            $scraper = new Scraper(new Client());
 
            $scraper->handle('https://www.covid19.gov.ao/');
            $data = General::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->first()->setHidden(['id']);
            // $date =  Carbon::today()->format('d-m-Y');
            $date =  $data->created_at->format('d-m-Y');
            
            return view('welcome', compact('data', 'date'));
         
        }
      
        
    }