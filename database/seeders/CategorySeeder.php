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
        $cat3->description="Estudio de las ciecias sociales";
        $cat3->save();

        $cat4 = new Category();
        $cat4->name="Categoria Especial";
        $cat4->description="Especial";
        $cat4->save();

        $cat5 = new Category();
        $cat5->name="Nidea";
        $cat5->description="delocosxd";
        $cat5->save();
    }
}
