<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Course_Category;

class CurCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ins1 = new Course_Category();
        $ins1->course_id=1;
        $ins1->category_id=1;
        $ins1->save();

        $ins2 = new Course_Category();
        $ins2->course_id=2;
        $ins2->category_id=5;
        $ins2->save();

        $ins3 = new Course_Category();
        $ins3->course_id=3;
        $ins3->category_id=4;
        $ins3->save();

        $ins4 = new Course_Category();
        $ins4->course_id=4;
        $ins4->category_id=1;
        $ins4->save();

        $ins5 = new Course_Category();
        $ins5->course_id=5;
        $ins5->category_id=1;
        $ins5->save();

        $ins6 = new Course_Category();
        $ins6->course_id=6;
        $ins6->category_id=5;
        $ins6->save();

        $ins7 = new Course_Category();
        $ins7->course_id=7;
        $ins7->category_id=5;
        $ins7->save();

        $ins8 = new Course_Category();
        $ins8->course_id=8;
        $ins8->category_id=3;
        $ins8->save();

        $ins9 = new Course_Category();
        $ins9->course_id=9;
        $ins9->category_id=1;
        $ins9->save();

        $ins10 = new Course_Category();
        $ins10->course_id=10;
        $ins10->category_id=3;
        $ins10->save();

        $ins11 = new Course_Category();
        $ins11->course_id=11;
        $ins11->category_id=6;
        $ins11->save();

        $ins12 = new Course_Category();
        $ins12->course_id=12;
        $ins12->category_id=2;
        $ins12->save();
    }
}
