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

        $edition = new Edition();
        $edition->name="Edicion De Fisica 2020";
        $edition->start_at="2020-05-31 00:00:00";
        $edition->end_at="2020-06-30 00:00:00";
        $edition->space_available=0;
        $edition->course_id=1;
        $edition->teacher_id=3;
        $edition->save();

        $edition = new Edition();
        $edition->name="PROG 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=25;
        $edition->course_id=2;
        $edition->teacher_id=4;
        $edition->save();

        $edition = new Edition();
        $edition->name="PROG 2021 B";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=25;
        $edition->course_id=2;
        $edition->teacher_id=5;
        $edition->save();

        $edition = new Edition();
        $edition->name="Biologia 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=60;
        $edition->course_id=3;
        $edition->teacher_id=3;
        $edition->save();

        $edition = new Edition();
        $edition->name="Matematicas 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=50;
        $edition->course_id=4;
        $edition->teacher_id=4;
        $edition->save();

        $edition = new Edition();
        $edition->name="RDC 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=15;
        $edition->course_id=7;
        $edition->teacher_id=5;
        $edition->save();

        $edition = new Edition();
        $edition->name="Derecho 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=200;
        $edition->course_id=8;
        $edition->teacher_id=2;
        $edition->save();

        $edition = new Edition();
        $edition->name="Diseño grafico 2021";
        $edition->start_at="2021-03-15 00:00:00";
        $edition->end_at="2021-11-30 00:00:00";
        $edition->space_available=10;
        $edition->course_id=12;
        $edition->teacher_id=3;
        $edition->save();
    }
}
