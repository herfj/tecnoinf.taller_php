<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cur1 = new Course();
        $cur1->institute_id=1;
        $cur1->name="Fisica";
        $cur1->description="Fisica re flashera";
        $cur1->duration_in_weeks=12;
        $cur1->hours=20;
        $cur1->credits=15;
        $cur1->save();
    }
}
