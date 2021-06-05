<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Edition;
use App\Models\User;
use Illuminate\Support\Facades\Date;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edition = new Edition();
        $edition->name="Edicion De Fisica 2021";
        $edition->start_at="2021-05-31 00:00:00";
        $edition->end_at="2021-06-30 00:00:00";
        $edition->space_available=20;
        $edition->course_id=1;
        $edition->teacher_id=2;
        $edition->save();
    }
}
