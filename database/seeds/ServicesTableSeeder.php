<?php

use Illuminate\Database\Seeder;
use App\Models\Service;
use Carbon\Carbon;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $services = ([
            [
                'name' => 'Kubinga',
                'image' => 'kubinga.png',
                'category_id'=>'1',
                'android' =>'https://play.google.com/store/apps/dev?id=8879205649996700413',
                'ios' =>'https://itunes.apple.com/us/app/kubinga/id1350649132?mt=8',
                'web' =>'https://www.kubinga.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sócia',
                'image' => 'socia.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=com.INOKRI.Asocia',
                'ios' =>'https://apps.apple.com/us/app/socia/id1488537601?ls=1',
                'web' =>'',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
        ]);
      
        Service::insert($services);
  
    }
}