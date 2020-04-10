<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
   

    use App\Models\Tip;

    class TipController extends Controller
    {
  
        public function index(){
            \Session::has('locale')? app()->setLocale(\Session::get('locale')) :app()->setLocale('pt');
           
            $tips = Tip::paginate(15);
            return view('tips', compact('tips'));

        }
      
        
    }