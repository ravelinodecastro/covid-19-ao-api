<?php

    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use App\Models\General;
    use App\Models\Config;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Inertia\Inertia;
   

  

    class DashboardController extends Controller
    {
  
        public function __invoke()
    {
        $data = General::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->first();
        return Inertia::render('Dashboard/Index',[
            'general' => $data,
            'configs' => Config::first(),
            'date'=>  $data?($data->updated_at? $data->updated_at->format('d-m-Y'):$data->created_at->format('d-m-Y')):'Não actualizado'
        ]);
    }
      
        
    }