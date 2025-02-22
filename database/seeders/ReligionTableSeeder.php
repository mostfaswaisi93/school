<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('religions')->delete();

        $religions = [

            [
                'en' => 'Muslim',
                'ar' => 'مسلم',
            ],
            [
                'en' => 'Christian',
                'ar' => 'مسيحي',
            ],
            [
                'en' => 'Other',
                'ar' => 'غيرذلك',
            ],

        ];

        foreach ($religions as $R) {
            Religion::create(['Name' => $R]);
        }
    }
}
