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

            //Start Aki
            [
                'description' =>"Um Sistema de pagamentos móvel que por intermédio do qual os utilizadores poderão pagar de forma rápida, simples, cómoda e segura, um variado leque de ofertas de bens e serviços. Para as compras do dia-a-dia, pagar bens e serviços, levantar, transferir e depositar dinheiro com toda a segurança e simplicidade." ,
                
                'service_id'=> '3',
                'locale'=> 'pt',
            ],
            [
                'description' => "A mobile payment system that allows users to pay quickly, simply, conveniently and securely, with a wide range of offers of goods and services. For day-to-day purchases, paying for goods and services, withdrawing, transferring and depositing money in complete safety and simplicity.",
                
                'service_id' => '3',
                'locale' => 'en',
            ],
            [
                'description' => "Un sistema de pago móvil que permite a los usuarios pagar de forma rápida, simple, conveniente y segura, con una amplia gama de ofertas de bienes y servicios. Para compras cotidianas, pagar bienes y servicios, retirar, transferir y depositar dinero con total seguridad y simplicidad." ,
               
                'service_id'=> '3',
                'locale'=> 'es',
            ],
            [
                'description' => "Un système de paiement mobile qui permet aux utilisateurs de payer rapidement, simplement, commodément et en toute sécurité, avec une large gamme d'offres de biens et services. Pour les achats au jour le jour, le paiement des biens et services, le retrait, le transfert et le dépôt d'argent en toute sécurité et simplicité.",
               
                'service_id'=> '3',
                'locale'=> 'fr',
            ],
            //End Aki

            //Start Kamba
            [
                'description' => "Aplicativo gratuito para pagar na Internet ou em lojas físicas afiliadas, enviar e receber dinheiro para contactos em sua lista telefônica.",
                
                'service_id'=> '4',
                'locale'=> 'pt',
            ],
            [
                'description' => "Free application to pay on the Internet or in affiliated physical stores, send and receive money to contacts in your phone book.",
                
                'service_id' => '4',
                'locale' => 'en',
            ],
            [
                'description' => "Aplicación gratuita para pagar en Internet o en tiendas físicas afiliadas, enviar y recibir dinero a los contactos en su directorio telefónico.",
               
                'service_id'=> '4',
                'locale'=> 'es',
            ],
            [
                'description' =>"Application gratuite pour payer sur Internet ou dans les magasins physiques affiliés, envoyer et recevoir de l'argent aux contacts de votre annuaire téléphonique." ,
               
                'service_id'=> '4',
                'locale'=> 'fr',
            ],
            //End kamba


            //Start Multicaixa Express
            [
                'description' => "Canal que dá a possibilidade ao utente de um cartão bancário, de efectuar transacções de pagamentos disponíveis na rede MULTICAIXA.",
                
                'service_id'=> '5',
                'locale'=> 'pt',
            ],
            [
                'description' => "Channel that allows the user of a bank card to make payment transactions available on the MULTICAIXA network.",
                
                'service_id' => '5',
                'locale' => 'en',
            ],
            [
                'description' => "Canal que permite al usuario de una tarjeta bancaria hacer transacciones de pago disponibles en la red MULTICAIXA.",
               
                'service_id'=> '5',
                'locale'=> 'es',
            ],
            [
                'description' => "Canal qui donne la possibilité à l'utilisateur d'un panier bancaire, d'effectuer des transactions de paiement à la disposition du réseau MULTICAIXA.",
               
                'service_id'=> '5',
                'locale'=> 'fr',
            ],
            //End Multicaixa Express

            //Start Tupuca
            [
                'description' => "Primeiro aplicativo no mercado angolano que oferece aos seus clientes o serviço de Take Away e entrega de refeições ao domicilio",
                
                'service_id'=> '6',
                'locale'=> 'pt',
            ],
            [
                'description' => "First application in the Angolan market that offers its customers the Take Away service and home delivery of meals",
                
                'service_id' => '6',
                'locale' => 'en',
            ],
            [
                'description' => "Primera aplicación en el mercado angoleño que ofrece a sus clientes el servicio Take Away y la entrega a domicilio de comidas",
               
                'service_id'=> '6',
                'locale'=> 'es',
            ],
            [
                'description' => "Première application sur le marché angolais qui offre des années à vos clients ou un service à emporter et la livraison de références à votre domicile",
               
                'service_id'=> '6',
                'locale'=> 'fr',
            ],
            //End Tupuca

            //Start T'Leva
            [
                'description' => "Faça um trajecto confiável em minutos, a qualquer hora e qualquer dia do ano.",
                
                'service_id'=> '7',
                'locale'=> 'pt',
            ],
            [
                'description' => "Make a reliable journey in minutes, anytime and any day of the year.",
                
                'service_id' => '7',
                'locale' => 'en',
            ],
            [
                'description' => "Haga un viaje confiable en minutos, en cualquier momento y cualquier día del año.",
               
                'service_id'=> '7',
                'locale'=> 'es',
            ],
            [
                'description' => "Faites un voyage fiable en quelques minutes, à tout moment et n'importe quel jour de l'année.",
               
                'service_id'=> '7',
                'locale'=> 'fr',
            ],
            //End T'Leva

            //Start Soba E-store
            [
                'description' => "O mais revolucionário e sofisticado serviço de vendas online em Angola, com entrega nas 18 províncias.",
                
                'service_id'=> '8',
                'locale'=> 'pt',
            ],
            [
                'description' => "The most revolutionary and sophisticated online sales service in Angola, with delivery to 18 provinces.",
                
                'service_id' => '8',
                'locale' => 'en',
            ],
            [
                'description' => "El servicio de ventas en línea más revolucionario y sofisticado de Angola, con entrega a 18 provincias.",
               
                'service_id'=> '8',
                'locale'=> 'es',
            ],
            [
                'description' => "Le service de vente en ligne le plus révolutionnaire et sophistiqué d'Angola, avec livraison dans 18 provinces.",
               
                'service_id'=> '8',
                'locale'=> 'fr',
            ],
            //End Soba E-store

            //Start NCR Angola
            [
                'description' => "Disponibiliza uma vasta gama de marcas de produtos informáticos de fabricantes mundialmente conhecidos a preços competitivos e conta com uma rede de lojas em Luanda",
                
                'service_id'=> '9',
                'locale'=> 'pt',
            ],
            [
                'description' => "It offers a wide range of computer product brands from world-renowned manufacturers at competitive prices and has a chain of stores in Luanda",
                
                'service_id' => '9',
                'locale' => 'en',
            ],
            [
                'description' => "Ofrece una amplia gama de marcas de productos informáticos de fabricantes de renombre mundial a precios competitivos y tiene una cadena de tiendas en Luanda",
               
                'service_id'=> '9',
                'locale'=> 'es',
            ],
            [
                'description' => "Elle propose une large gamme de marques de produits informatiques de fabricants de renommée mondiale à des prix compétitifs et dispose d'une chaîne de magasins à Luanda",
               
                'service_id'=> '9',
                'locale'=> 'fr',
            ],
            //End NCR Angola

            //Start BayQi
            [
                'description' => "Uma plataforma de Comercio Eletrónico (B2C) que permite o Vendedor em qualquer parte de mundo vender os seus produtos de forma segura e simples diretamente ao Consumidor final em África.",
                
                'service_id'=> '10',
                'locale'=> 'pt',
            ],
            [
                'description' => "An e-commerce platform (B2C) that allows the Seller anywhere in the world to sell their products safely and simply directly to the final consumer in Africa.",
                
                'service_id' => '10',
                'locale' => 'en',
            ],
            [
                'description' => "Una plataforma de comercio electrónico (B2C) que permite al Vendedor en cualquier parte del mundo vender sus productos de forma segura y sencilla directamente al consumidor final en África.",
               
                'service_id'=> '10',
                'locale'=> 'es',
            ],
            [
                'description' => "Une plateforme de commerce électronique (B2C) qui permet au vendeur n'importe où dans le monde de vendre ses produits en toute sécurité et simplement directement au consommateur final en Afrique.",
               
                'service_id'=> '10',
                'locale'=> 'fr',
            ],
            //End BayQi

            //Start Bwé Vip Store
            [
                'description' => "Plataforma de vendas online do site angolano de entretenimento Bwé Vip",
                
                'service_id'=> '11',
                'locale'=> 'pt',
            ],
            [
                'description' => "Online sales platform of the Angolan entertainment website Bwé Vip",
                
                'service_id' => '11',
                'locale' => 'en',
            ],
            [
                'description' => "Plataforma de ventas en línea del sitio web de entretenimiento angoleño Bwé Vip",
               
                'service_id'=> '11',
                'locale'=> 'es',
            ],
            [
                'description' =>"Plateforme de vente en ligne du site de divertissement angolais Bwé Vip" ,
               
                'service_id'=> '11',
                'locale'=> 'fr',
            ],
            //End Bwé Vip Store

            //Start Cesta Basica
            [
                'description' => "Plataforma angolana vocacionada a levar produtos da cesta básica de alta qualidade a preço baixo na sua casa, permitindo escolher os preços mais baixos do mercados através dos nossos parceiros.",
                
                'service_id'=> '12',
                'locale'=> 'pt',
            ],
            [
                'description' => "Angolan platform dedicated to bringing high quality basic food products at a low price to your home, allowing you to choose the lowest prices in the market through our partners.",
                
                'service_id' => '12',
                'locale' => 'en',
            ],
            [
                'description' => "Plataforma angoleña dedicada a llevar productos alimenticios básicos de alta calidad a un precio bajo a su hogar, lo que le permite elegir los precios más bajos del mercado a través de nuestros socios.",
               
                'service_id'=> '12',
                'locale'=> 'es',
            ],
            [
                'description' => "Plateforme angolaise dédiée à apporter des produits alimentaires de base de haute qualité à bas prix chez vous, vous permettant de choisir les prix les plus bas du marché grâce à nos partenaires.",
               
                'service_id'=> '12',
                'locale'=> 'fr',
            ],
            //End Cesta Basica

            //Start Fazenda Girassol
            [
                'description' =>" Actualmente líder em qualidade na área dos hortofrutícolas. Tem uma equipa de mais de 500 pessoas, com experiencia técnica e um acumulado de conhecimento na produção e distribuição de produtos agrícolas em Angola" ,
                
                'service_id'=> '13',
                'locale'=> 'pt',
            ],
            [
                'description' => "Currently leader in quality in the field of fruit and vegetables. It has a team of over 500 people, with technical experience and an accumulated knowledge in the production and distribution of agricultural products in Angola",
                
                'service_id' => '13',
                'locale' => 'en',
            ],
            [
                'description' => "Actualmente líder en calidad en el sector de frutas y hortalizas. Cuenta con un equipo de más de 500 personas, con experiencia técnica y un conocimiento acumulado en la producción y distribución de productos agrícolas en Angola.",
               
                'service_id'=> '13',
                'locale'=> 'es',
            ],
            [
                'description' => "Actuellement leader de la qualité dans le domaine des fruits et légumes. Il a une équipe de plus de 500 personnes, avec une expérience technique et une connaissance accumulée dans la production et la distribution de produits agricoles en Angola",
               
                'service_id'=> '13',
                'locale'=> 'fr',
            ],
            //End Fazenda Girassol

            //Start O Garçom Angola
            [
                'description' => "Oferecer através dos parceiros (restaurantes, farmácias, lavandarias, supermercados e outros parceiros), um serviço personalizado, praticando um preço justo",
                
                'service_id'=> '14',
                'locale'=> 'pt',
            ],
            [
                'description' => "Offer through partners (restaurants, pharmacies, laundries, supermarkets and other partners), a personalized service, at a fair price",
                
                'service_id' => '14',
                'locale' => 'en',
            ],
            [
                'description' => "Ofrecer a través de socios (restaurantes, farmacias, lavanderías, supermercados y otros socios) un servicio personalizado a un precio justo.",
               
                'service_id'=> '14',
                'locale'=> 'es',
            ],
            [
                'description' => "Offrez à travers des partenaires (restaurants, pharmacies, blanchisseries, supermarchés et autres partenaires), un service personnalisé, à un prix équitable",
               
                'service_id'=> '14',
                'locale'=> 'fr',
            ],
            //End O Garçom Angola
         
           
        ]);

        ServiceTranslation::insert($services_translations);
    }
}