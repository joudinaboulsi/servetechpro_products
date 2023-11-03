<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1698995722post-01.jpg',
                'alt_image' => 'portfolio',
                'product_id' => '1',
                'created_at' => '2023-11-03 07:06:26',
                'updated_at' => '2023-11-03 07:06:26',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1698995746b_thumbb-03.jpg',
                'alt_image' => 'portfolio',
                'product_id' => '1',

                'created_at' => '2023-11-03 07:06:26',
                'updated_at' => '2023-11-03 07:06:26',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1698995735post-02.jpg',
                'alt_image' => 'portfolio',
                'product_id' => '1',
                'created_at' => '2023-11-03 07:06:26',
                'updated_at' => '2023-11-03 07:06:26',
            ),
        
        ));
    }
}
