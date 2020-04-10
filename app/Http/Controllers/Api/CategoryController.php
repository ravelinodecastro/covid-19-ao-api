<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
   

    use App\Models\Category;

    class CategoryController extends Controller
    {
  
        public function get(Request $request){
            $request->lang? app()->setLocale($request->lang) :app()->setLocale('pt');
            $categories = Category::get();
            $count = Category::count();
            $skip = 5;
            $limit = $count - $skip;
            $main =    $categories->take(5);
            $others = $count>5?Category::skip($skip)->take($limit)->get():[];

    
            return response()->json(['message' => "Operação realizada com sucesso.",
             'main' => $main,
              'others' => $others,
              'success' => true,
              'status' => 1,
                'license'   => 'This API was developed by Ravelino de Castro (https://github.com/ravelinodecastro) using official information from the government of angola (ministry of health) available at covid19.gov.ao'
              ]);
        }
        
    }