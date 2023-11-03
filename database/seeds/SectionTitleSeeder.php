<?php

use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('section_titles')->delete();
        
        \DB::table('section_titles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Our Products',
                'subtitle' => 'Discover our Products',
                'created_at' =>Null,
                'updated_at' => '2023-11-03 07:06:26',
            ),
           
        
        ));
    }
}
