<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
   

    use App\Models\Service;

    class ServiceController extends Controller
    {
  
        public function get(Request $request){
            $request->lang? app()->setLocale($request->lang) :app()->setLocale('pt');
            $services = Service::whereStatus('1')->orderBy('name')->paginate(15);
       
            return response()->json([
                'success' => true,
                'message' => "Operação realizada com sucesso.", 
                'data' => $services,
                'status' => 1,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
            ]);
         
        }
        public function getByCat($id, Request $request){
            $request->lang? app()->setLocale($request->lang) :app()->setLocale('pt');
            $services = Service::whereStatus('1')->where('category_id', $id)->orderBy('name')->paginate(15);
       
            return response()->json([
                'success' => true,
                'message' => "Operação realizada com sucesso.", 
                'data' => $services,
                'status' => 1,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
            ]);
         
        }
        public function create(Request $request){
       
                $service = new Service();
                $service->name = $request->name;
                $service->status = '1';
                $service->image = $request->image;
                $service->android = $request->android;
                $service->ios = $request->ios;
                $service->web = $request->web;
                $service->save();
            
                foreach (['pt', 'en', 'es', 'fr'] as $locale) {
                    $service->translateOrNew($locale)->description = "Description {$locale}";
                }
            
                $service->save();
            
                echo 'Created an service with some translations!';
           
        }
      
        
    }