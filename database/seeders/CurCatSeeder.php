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
    }
}
