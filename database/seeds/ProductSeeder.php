<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1698995186welcome-img.png',
                'background' => '1698995469pagetitle-bg.jpg',
                'product_name' => 'Fabric Treatment',
                'desc'=>'<p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>',
                'title_details' => 'ENGINE COMPONENTS',
                'subtitle_details' => 'Product Description',
                'desc1'=>'<p>CTP&reg; engine parts are designed and manufactured to work hard as an integrated system. We continually improve our techniques to ensure you get quality products with the best technology available in the market. We are committed to lowering your total parts&rsquo; cost, and maximizing your productivity.</p>',
                'tag1'=>'colors:',
                'tag2'=>'size:',
                'tag_p1'=>'Fabric, Textile',
                'tag_p2'=>'Fabric, Textile',
                'title_desc2'=>'DESCRIPTION',
                'desc2'=>'<p>Connecting Rods: CTP&reg; Connecting Rods are made from steel forgings (malleable or spheroid-graphite iron casting or sinter forgings are beginning to be used for smaller engines).<br>Camshafts: CTP camshafts ensure long-term operation efficiency as a result of careful and quality based production. CTP guarantees low wear and tear camshafts, as well as long-life, smooth running engines.<br>Engine Bearings: CTP&reg; Copper/Lead bearings are made of a sintered trimetal with a base alloy of copper, lead and tin with a nickel dam and Babbitt top layer.</p>',
                'created_at' => '2023-11-03 07:06:26',
                'updated_at' => '2023-11-03 07:06:26',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1698995865b_thumbb-03.jpg',
                'background' => '1698996771pagetitle-bg.jpg',
                'product_name' => 'Satin Weaving',
                'desc'=>'<p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>',
                'title_details' => 'ENGINE COMPONENTS',
                'subtitle_details' => 'Product Description',
                'desc1'=>'<p>CTP&reg; engine parts are designed and manufactured to work hard as an integrated system. We continually improve our techniques to ensure you get quality products with the best technology available in the market. We are committed to lowering your total parts&rsquo; cost, and maximizing your productivity.</p>',
                'tag1'=>'colors:',
                'tag2'=>'size:',
                'tag_p1'=>'Fabric, Textile',
                'tag_p2'=>'Fabric, Textile',
                'title_desc2'=>'DESCRIPTION',
                'desc2'=>'<p>Connecting Rods: CTP&reg; Connecting Rods are made from steel forgings (malleable or spheroid-graphite iron casting or sinter forgings are beginning to be used for smaller engines).<br>Camshafts: CTP camshafts ensure long-term operation efficiency as a result of careful and quality based production. CTP guarantees low wear and tear camshafts, as well as long-life, smooth running engines.<br>Engine Bearings: CTP&reg; Copper/Lead bearings are made of a sintered trimetal with a base alloy of copper, lead and tin with a nickel dam and Babbitt top layer.</p>',
       
                'created_at' => '2023-11-03 07:06:26',
                'updated_at' => '2023-11-03 07:06:26',
            ),  ));
    }
}
