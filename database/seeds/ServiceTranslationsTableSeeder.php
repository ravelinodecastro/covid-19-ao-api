<?php

use Illuminate\Database\Seeder;
use App\Models\ServiceTranslation;
use Carbon\Carbon;
class ServiceTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $services_translations = ([
            //Start Kubinga
            [
                'description' => 'Nosso objetivo é fornecer um serviço satisfatório e fascinante para os clientes. Se você precisa ir a uma importante reunião de negócios ou participar de uma função de casamento, tudo é possível com apenas alguns cliques em nosso telefone.',
                
                'service_id'=> '1',
                'locale'=> 'pt',
            ],
            [
                'description' => 'Our goal is to provide a satisfying and fascinating service to customers. Whether you need to attend an important business meeting or attend a wedding function, everything is possible with just a few clicks on our phone.',
                
                'service_id' => '1',
                'locale' => 'en',
            ],
            [
                'description' => 'Nuestro objetivo es proporcionar un servicio satisfactorio y fascinante a los clientes. Ya sea que necesite asistir a una reunión de negocios importante o asistir a una función de boda, todo es posible con solo unos pocos clics en nuestro teléfono.',
               
                'service_id'=> '1',
                'locale'=> 'es',
            ],
            [
                'description' => "Notre objectif est de fournir un service satisfaisant et fascinant aux clients. Que vous ayez besoin d'assister à une réunion d'affaires importante ou d'assister à une cérémonie de mariage, tout est possible en quelques clics sur notre téléphone.",
               
                'service_id'=> '1',
                'locale'=> 'fr',
            ],
            //End Kubinga

            //Start Socia
            [
                'description' => 'Uma plataforma de compras , que permite a utlizadores comprarem produtos a preço de grossista mais em quantidade de retalho. Juntamos varias pessoas para garantir que em conjunto elas conseguem comprar produtos a um preço mais reduzido.',
                
                'service_id'=> '2',
                'locale'=> 'pt',
            ],
            [
                'description' => 'A shopping platform, which allows users to buy products at wholesale price but in retail quantity. We bring several people together to ensure that together they can buy products at a lower price.',
                
                'service_id' => '2',
                'locale' => 'en',
            ],
            [
                'description' => 'Una plataforma de compras, que permite a los usuarios comprar productos a precio mayorista pero en cantidad minorista. Reunimos a varias personas para garantizar que juntas puedan comprar productos a un precio más bajo.',
               
                'service_id'=> '2',
                'locale'=> 'es',
            ],
            [
                'description' => "Une plateforme d'achat, qui permet aux utilisateurs d'acheter des produits au prix de gros mais en quantité au détail. Nous réunissons plusieurs personnes pour faire en sorte qu’ensemble, elles puissent acheter des produits à un prix inférieur.",
               
                'service_id'=> '2',
                'locale'=> 'fr',
            ],
            //End Socia
         
           
        ]);

        ServiceTranslation::insert($services_translations);
    }
}