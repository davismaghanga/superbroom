<?php

use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad1 = new App\Models\Advertisement();
        $ad1->ad_title = 'Word of Mouth';
        $ad1->save();

        $ad2 = new App\Models\Advertisement();
        $ad2->ad_title = 'Website';
        $ad2->save();

        $ad3 = new App\Models\Advertisement();
        $ad3->ad_title = 'Social Media';
        $ad3->save();

        $ad4 = new App\Models\Advertisement();
        $ad4->ad_title = 'Referral';
        $ad4->save();

        $ad5 = new App\Models\Advertisement();
        $ad5->ad_title = 'Events';
        $ad5->save();

        $ad6 = new App\Models\Advertisement();
        $ad6->ad_title = 'Other';
        $ad6->save();

    }
}
