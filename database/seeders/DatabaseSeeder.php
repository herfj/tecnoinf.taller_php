<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course_Category;
use App\Models\Institute;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //PARA CUANDO TENGA RELACIONES
        $this->call(InstituteSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CurCatSeeder::class);
    }
}
