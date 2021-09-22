<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name"=> "LG Mobile",
                "Price"=> "200",
                "description"=>"A LG mobile with 4Gb ram and 64gb Memory",
                "category"=>"mobile",
                "gallery" =>"https://techlector.com/wp-content/uploads/2020/09/LG-K21-1.jpg.webp",
            ],
            [
                "name"=> "Oppo Mobile",
                "Price"=> "300",
                "description"=>"A Oppo mobile with 6gb ram adn 128gb memory",
                "category"=>"mobile",
                "gallery" =>"https://www.oppo.com.my/webshaper/pcm/pictures/Landing%20Page/Reno5/KV_Register-your-Interest_1200x500.jpg",
            ],
            [
                "name"=> "Panasonic Tv",
                "Price"=> "500",
                "description"=>"A Panasonic Tv with 6k Display and leatest processor",
                "category"=>"Tv",
                "gallery" =>"https://i1.wp.com/panasonicservicecenterinkakinada.co.in/wp-content/uploads/2020/09/yu.jpg?fit=1200%2C500&ssl=1",
            ],
            [
                "name"=> "Apple Watch",
                "Price"=> "400",
                "description"=>"Apple Watch with new thin design and tracking feature",
                "category"=>"Watch",
                "gallery" =>"https://i.gadgets360cdn.com/large/apple_watch_series_7_digital_crown_image_1631645435600.jpg",
            ],
            [
                "name"=> "Apple Macbook Pro",
                "Price"=> "1250",
                "description"=>"A Apple Macbook pro with new A15 Bionic Chip fastest Processor",
                "category"=>"Macbook",
                "gallery" =>"https://softomationafrica.com/wp-content/uploads/2019/03/Laptop-1200x500.jpg",
            ]
        ]);
    }
}
