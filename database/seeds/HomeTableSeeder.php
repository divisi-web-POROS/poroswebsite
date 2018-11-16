<?php

use App\Home;
use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array = [
    		'about_sentence',
    		'about_image',
    		'about_title',
    		'about_hint',
    		'about_description',
    		'parallax_one_big_text',
    		'parallax_one_small_text',
    		'department_sentence',
    		'portofolio_sentence',
    		'info_address',
    		'info_social_link_facebook',
    		'info_social_link_line',
    		'info_social_link_twitter',
    		'info_social_link_instagram',
    	];
    	for ($i=0; $i < sizeof($array); $i++) { 
    		Home::create([
    			'field' => $array[$i]
    		]);
    	}
    }
}
