<?php

namespace App\Http\Controllers\admin;

use Inertia\Inertia;
use App\Models\General;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ConfigsController extends Controller
{
    public function index()
    {

        $data = General::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->first();
        return Inertia::render('Configs/Index', [
            'general' => $data,
            'configs' => Config::first(),
            'date'=>  $data?($data->updated_at? $data->updated_at->format('d-m-Y'):$data->created_at->format('d-m-Y')):'Não actualizado'

        ]);
    }


    public function saveOrUpdate(General $general)
    {
        Request::validate([
            'active' => ['required', 'max:100'],
            'recovered' => ['required', 'max:100'],
            'suspects' => ['required', 'max:100'],
            'deaths' => ['required', 'max:100'],
        ]);
       
        if (!$general->created_at->isToday()){
            General::create([
                'confirmed' =>  Request::get('active') + Request::get('recovered') + Request::get('deaths'),
                'active' => Request::get('active'),
                'recovered' =>  Request::get('recovered'),
                'suspects' =>  Request::get('suspects'),
                'deaths' => Request::get('deaths'),
            ]);
            return Redirect::back()->with('success', 'Dados criados.');
        }
        else{
            $general->update([
                'confirmed' =>  Request::get('active') + Request::get('recovered') + Request::get('deaths'),
                'active' => Request::get('active'),
                'recovered' =>  Request::get('recovered'),
                'suspects' =>  Request::get('suspects'),
                'deaths' => Request::get('deaths'),
            ]);
            return Redirect::back()->with('success', 'Dados actualizados.');
            
        }
       
    }
    public function updateConfig(Config $config)
    {
       
        $config->update(
            Request::validate([
                'source' => ['required', 'max:100'],
                'auto_update' => ['required', 'max:1'],
            ])
        );
      
        return Redirect::back()->with('success', 'Configurações actualizadas.');
    }

  
}
