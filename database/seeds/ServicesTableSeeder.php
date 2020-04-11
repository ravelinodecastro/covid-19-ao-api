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
                'status'=>'1',
                'image' => 'kubinga.png',
                'category_id'=>'1',
                'android' =>'https://play.google.com/store/apps/dev?id=8879205649996700413',
                'ios' =>'https://apps.apple.com/us/app/kubinga/id1350649132',
                'web' =>'https://www.kubinga.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sócia',
                'status'=>'1',
                'image' => 'socia.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=com.INOKRI.Asocia',
                'ios' =>'https://apps.apple.com/us/app/socia/id1488537601',
                'web' =>'',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'AKI',
                'status'=>'1',
                'image' => 'aki.jpg',
                'category_id'=>'3',
                'android' =>'https://play.google.com/store/apps/details?id=ao.co.aki',
                'ios' =>'https://apps.apple.com/ao/app/aki-fica-tudo-mais-f%C3%A1cil/id1462354099',
                'web' =>'https://aki.co.ao',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Kamba',
                'status'=>'1',
                'image' => 'kamba.png',
                'category_id'=>'3',
                'android' =>'https://play.google.com/store/apps/details?id=com.usekamba.kamba.kamba',
                'ios' =>'https://apps.apple.com/app/kamba-pagamentos-m%C3%B3veis/id1268906716',
                'web' =>'https://www.usekamba.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Multicaixa Express',
                'status'=>'1',
                'image' => 'mcx.png',
                'category_id'=>'3',
                'android' =>'https://play.google.com/store/apps/details?id=com.sibsint.mcxwallet',
                'ios' =>'https://apps.apple.com/ao/app/multicaixa-express/id1433675921',
                'web' =>'https://www.emis.co.ao/parasi/multicaixa-express/artigos/multicaixa-express',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tupuca',
                'status'=>'1',
                'image' => 'tupuca.jpg',
                'category_id'=>'4',
                'android' =>'https://play.google.com/store/apps/details?id=com.tupuca.app',
                'ios' =>'https://apps.apple.com/us/app/tupuca-entrega-de-comida/id1135386915',
                'web' =>'https://tupuca.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => "T'Leva",
                'status'=>'1',
                'image' => 'tleva.jpg',
                'category_id'=>'1',
                'android' =>'https://play.google.com/store/apps/details?id=production.tleva.customer',
                'ios' =>'https://apps.apple.com/pt/app/tleva/id1455828810',
                'web' =>'https://tleva.tupuca.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Soba E-store',
                'status'=>'1',
                'image' => 'soba.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=com.sobastore.app',
                'ios' =>'https://apps.apple.com/ao/app/soba-e-store/id1432428375',
                'web' =>'https://www.soba-store.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'NCR Angola',
                'status'=>'1',
                'image' => 'ncr.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=pt.signed.ncrangola',
                'ios' =>'https://apps.apple.com/pt/app/ncr-angola/id1205940563',
                'web' =>'https://www.ncrangola.com/loja/particulares',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'BayQi',
                'status'=>'1',
                'image' => 'bayqi.png',
                'category_id'=>'2',
                'android' =>'',
                'ios' =>'',
                'web' =>'https://bayqi.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Bwé Vip Store',
                'status'=>'1',
                'image' => 'bwevip.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=com.bwevipstore.app',
                'ios' =>'',
                'web' =>'https://bwevipstore.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cesta Basica',
                'status'=>'1',
                'image' => 'cestabasica.webp',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=mas.co.ao.cesta_basica',
                'ios' =>'',
                'web' =>'',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Fazenda Girassol',
                'status'=>'1',
                'image' => 'fazendagirassol.jpg',
                'category_id'=>'2',
                'android' =>'https://play.google.com/store/apps/details?id=com.fazendagirassol.app',
                'ios' =>'https://apps.apple.com/pt/app/fazenda-girassol/id1192396198',
                'web' =>'https://www.fazendagirassol.com/',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'O Garçom Angola',
                'status'=>'1',
                'image' => 'ogarcomangola.jpg',
                'category_id'=>'4',
                'android' =>'https://play.google.com/store/apps/details?id=com.ogarcom.orderingapp',
                'ios' =>'https://itunes.apple.com/us/app/o-gar%C3%A7om-angola/id1434316503',
                'web' =>'',
                'created_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
                'updated_at' =>Carbon:: now()-> format('Y-m-d H:i:s'),
            ],
            
        ]);
      
        Service::insert($services);
  
    }
}