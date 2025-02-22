<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('grades')->delete();
        $grades = [
            ['en' => 'Primary stage', 'ar' => 'المرحلة الابتدائية'],
            ['en' => 'middle School', 'ar' => 'المرحلة الاعدادية'],
            ['en' => 'High school', 'ar' => 'المرحلة الثانوية'],
        ];

        foreach ($grades as $grade) {
            Grade::create(['Name' => $grade]);
        }

    }
}
