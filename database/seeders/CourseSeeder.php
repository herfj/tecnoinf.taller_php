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
        $cur2->name="Programacion";
        $cur2->description="como se hizo esta pag XD";
        $cur2->duration_in_weeks=20;
        $cur2->hours=15;
        $cur2->credits=20;
        $cur2->save();

        $cur3 = new Course();
        $cur3->institute_id=3;
        $cur3->name="Biologia";
        $cur3->description="Aca se estudia la vida broder";
        $cur3->duration_in_weeks=10;
        $cur3->hours=15;
        $cur3->credits=20;
        $cur3->save();

        $cur4 = new Course();
        $cur4->institute_id=4;
        $cur4->name="Musica del liceo";
        $cur4->description="La musica del liceo pero sin ariel(osea que es mala)";
        $cur4->duration_in_weeks=15;
        $cur4->hours=30;
        $cur4->credits=2;
        $cur4->save();

        $cur5 = new Course();
        $cur5->institute_id=1;
        $cur5->name="GAL";
        $cur5->description="Suena feo";
        $cur5->duration_in_weeks=40;
        $cur5->hours=70;
        $cur5->credits=50;
        $cur5->save();

        $cur6 = new Course();
        $cur6->institute_id=2;
        $cur6->name="Taller PHP";
        $cur6->description="Me suena de algo";
        $cur6->duration_in_weeks=12;
        $cur6->hours=20;
        $cur6->credits=15;
        $cur6->save();

        $cur7 = new Course();
        $cur7->institute_id=2;
        $cur7->name="Redes de Computadora";
        $cur7->description="Redes de Computadora";
        $cur7->duration_in_weeks=12;
        $cur7->hours=30;
        $cur7->credits=20;
        $cur7->save();
    }
}
