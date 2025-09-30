<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuConstantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuConstants = [
            [
                'keyName' => 'instagram_url',
                'keyValue' => 'https://www.instagram.com/pate.cream?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
            ],
            [
                'keyName' => 'facebook_url',
                'keyValue' => 'https://www.facebook.com/Patecream/?ref=pl_edit_xav_ig_profile_page_web#',
            ],
            [
                'keyName' => 'whatsapp_url',
                'keyValue' => 'https://wa.me/71881897',
            ],
            [
                'keyName' => 'merry_cream_first_flavor',
                'keyValue' => 'Chocolate',
            ],
            [
                'keyName' => 'merry_cream_second_flavor',
                'keyValue' => 'Vanilla',
            ],
        ];

        foreach ($menuConstants as $constant) {
            DB::table('menu_constants')->updateOrInsert(
                ['keyName' => $constant['keyName']],
                ['keyValue' => $constant['keyValue'], 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
