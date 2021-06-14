<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new Category();
        $cat1->name="Ciencias Exactas";
        $cat1->description="Categoria sobre Ciencias exactas";
        $cat1->save();

        $cat2 = new Category();
        $cat2->name="Arte";
        $cat2->description="Categoria que engloba el arte";
        $cat2->save();

        $cat3 = new Category();
        $cat3->name="Ciencias Sociales";
        $cat3->description="Estudio de las ciencias sociales";
        $cat3->save();

        $cat4 = new Category();
        $cat4->name="Ciencias Naturales";
        $cat4->description="Ciencias naturales";
        $cat4->save();

        $cat5 = new Category();
        $cat5->name="Tecnologia y comunicacion";
        $cat5->description="Informatica";
        $cat5->save();

        $cat6 = new Category();
        $cat6->name="Riesgo";
        $cat6->description="xD";
        $cat6->save();
    }
}
