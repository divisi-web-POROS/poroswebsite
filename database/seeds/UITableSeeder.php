<?php

use App\UI;
use Illuminate\Database\Seeder;

class UITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
    		'web_title',
            'footer_text',
            'project_link',
            'poros_email',
            'poros_location',
            'poros_phone',
            'line_link',
            'instagram_link',
            'youtube_link',
            'section1_header_1',
            'section1_text_1',
            'section1_image_1',
            'section1_header_2',
            'section1_text_2',
            'section1_image_2',
            'section2_title',
            'section2_text',
            'section2_text_1',
            'section2_icon_1',
            'section2_video_link_1',
            'section2_text_2',
            'section2_icon_2',
            'section2_video_link_2',
            'section2_text_3',
            'section2_icon_3',
            'section2_video_link_3',
            'section2_text_4',
            'section2_icon_4',
            'section2_video_link_4',
            'section3_title',
            'section3_text',
            'section3_icon_1',
            'section3_name_1',
            'section3_text_1',
            'section3_icon_2',
            'section3_name_2',
            'section3_text_2',
            'section3_icon_3',
            'section3_name_3',
            'section3_text_3',
            'section4_title',
            'section4_image',
            'section4_text',
            'section4_tab_1',
            'section4_tab_2',
            'section4_icon_1',
            'section4_name_1',
            'section4_text_1',
            'section4_icon_2',
            'section4_name_2',
            'section4_text_2',
            'section4_icon_3',
            'section4_name_3',
            'section4_text_3',
            'section4_icon_4',
            'section4_name_4',
            'section4_text_4',
            'section4_icon_5',
            'section4_name_5',
            'section4_text_5',
            'section5_title',
            'section5_text',
            'section6_title',
            'section6_text',
            'section7_title',
            'section7_text',
            'section8_title',
            'section9_title',
            'section9_text',
    	];
    	for ($i=0; $i < sizeof($array); $i++) { 
    		UI::create([
    			'field' => $array[$i]
    		]);
    	}
    }
}
