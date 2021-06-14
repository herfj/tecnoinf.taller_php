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
        $cur1->description="Ciencia que estudia las propiedades de la materia y de la energía y establece las leyes que explican los fenómenos naturales, excluyendo los que modifican la estructura molecular de los cuerpos. ";
        $cur1->duration_in_weeks=12;
        $cur1->hours=20;
        $cur1->credits=15;
        $cur1->save();

        $cur2 = new Course();
        $cur2->institute_id=2;
        $cur2->name="Programacion";
        $cur2->description="La programación es el proceso utilizado para idear y ordenar las acciones necesarias para realizar un proyecto, preparar ciertas máquinas o aparatos para que  empiecen a funcionar en el momento y en la forma deseados o elaborar programas para su empleo en computadoras.";
        $cur2->duration_in_weeks=20;
        $cur2->hours=15;
        $cur2->credits=20;
        $cur2->save();

        $cur3 = new Course();
        $cur3->institute_id=3;
        $cur3->name="Biologia";
        $cur3->description="Ciencia que estudia la estructura de los seres vivos y de sus procesos vitales.";
        $cur3->duration_in_weeks=10;
        $cur3->hours=15;
        $cur3->credits=20;
        $cur3->save();

        $cur4 = new Course();
        $cur4->institute_id=1;
        $cur4->name="Matematicas";
        $cur4->description="Ciencia que estudia las propiedades de los números y las relaciones que se establecen entre ellos.";
        $cur4->duration_in_weeks=15;
        $cur4->hours=30;
        $cur4->credits=2;
        $cur4->save();

        $cur5 = new Course();
        $cur5->institute_id=2;
        $cur5->name="MDL";
        $cur5->description="Matematica discreta y logica";
        $cur5->duration_in_weeks=40;
        $cur5->hours=70;
        $cur5->credits=50;
        $cur5->save();

        $cur6 = new Course();
        $cur6->institute_id=2;
        $cur6->name="Taller PHP";
        $cur6->description="Esta misma materia";
        $cur6->duration_in_weeks=12;
        $cur6->hours=20;
        $cur6->credits=15;
        $cur6->save();

        $cur7 = new Course();
        $cur7->institute_id=2;
        $cur7->name="Redes de Computadora";
        $cur7->description="La finalidad principal para la creación de una red de ordenadores es compartir los recursos y la información en la distancia, asegurar la confiabilidad y la ...";
        $cur7->duration_in_weeks=12;
        $cur7->hours=30;
        $cur7->credits=20;
        $cur7->save();

        $cur8 = new Course();
        $cur8->institute_id=4;
        $cur8->name="Derecho";
        $cur8->description="El Derecho es el conjunto de normas que imponen deberes y normas que confieren facultades, que establecen las bases de convivencia social y cuyo fin es dotar a todos los miembros de la sociedad de los mínimos de seguridad, certeza, igualdad, libertad y justicia";
        $cur8->duration_in_weeks=12;
        $cur8->hours=30;
        $cur8->credits=20;
        $cur8->save();

        $cur9 = new Course();
        $cur9->institute_id=5;
        $cur9->name="Estadística";
        $cur9->description="stats";
        $cur9->duration_in_weeks=12;
        $cur9->hours=30;
        $cur9->credits=20;
        $cur9->save();

        $cur10 = new Course();
        $cur10->institute_id=5;
        $cur10->name="Psicología";
        $cur10->description="Ciencia que estudia el cerebro humano.";
        $cur10->duration_in_weeks=12;
        $cur10->hours=30;
        $cur10->credits=20;
        $cur10->save();

        $cur11 = new Course();
        $cur11->institute_id=5;
        $cur11->name="Guardavidas";
        $cur11->description="ISEF: guardavidas";
        $cur11->duration_in_weeks=12;
        $cur11->hours=30;
        $cur11->credits=20;
        $cur11->save();

        $cur12 = new Course();
        $cur12->institute_id=5;
        $cur12->name="Diseño grafico";
        $cur12->description="Diseño";
        $cur12->duration_in_weeks=12;
        $cur12->hours=30;
        $cur12->credits=20;
        $cur12->save();




    }
}
