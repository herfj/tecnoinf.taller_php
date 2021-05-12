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

        $cur2 = new Course();
        $cur2->institute_id=2;
        $cur2->name="Quimica";
        $cur2->description="Quimica re flashera";
        $cur2->duration_in_weeks=12;
        $cur2->hours=20;
        $cur2->credits=15;
        $cur2->save();

        $cur3 = new Course();
        $cur3->institute_id=3;
        $cur3->name="Mate";
        $cur3->description="Mate re flashera";
        $cur3->duration_in_weeks=12;
        $cur3->hours=20;
        $cur3->credits=15;
        $cur3->save();
    }
}
