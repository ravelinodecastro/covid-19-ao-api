<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
   

    use App\Models\Tip;

    class TipsController extends Controller
    {
  
        public function get(Request $request){
            $request->lang? app()->setLocale($request->lang) :app()->setLocale('pt');
            $tips = Tip::paginate(15);
       
            return response()->json([
                'success' => true,
                'message' => "Operação realizada com sucesso.", 
                'data' => $tips,
                'status' => 1,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
            ]);
         
        }
        public function create(Request $request){
       
                $tip = new Tip();
                $tip->image = $request->image;
                $tip->save();
            
                foreach (['pt', 'en', 'es', 'fr'] as $locale) {
                    $tip->translateOrNew($locale)->title = "Title {$locale}";
                    $tip->translateOrNew($locale)->body = "Body {$locale}";
                }
            
                $tip->save();
            
                echo 'Created an tip with some translations!';
           
        }
      
        
    }