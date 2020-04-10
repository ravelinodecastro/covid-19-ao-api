<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
   

  

    class ServiceController extends Controller
    {
  
        public function index(){

            return view('services');
        }
      
        
    }