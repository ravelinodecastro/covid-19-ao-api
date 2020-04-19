<?php

use Illuminate\Database\Seeder;
use App\Models\Config;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $configs = ([
            [
                'auto_update'=>'1',
                'source'=>'https://www.covid19.gov.ao/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
        ]);
      
        Config::insert($configs);
  
    }
}