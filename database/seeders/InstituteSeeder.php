<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Institute;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ins1 = new Institute();
        $ins1->name="FING";
        $ins1->description="Facultad de Ingenieria de la UDELAR";
        $ins1->save();

        $ins2 = new Institute();
        $ins2->name="UTEC";
        $ins2->description="Universidad Tecnologica del Uruguay";
        $ins2->save();

        $ins1 = new Institute();
        $ins1->name="FMEC";
        $ins1->description="Facultad de Medicina de la UDELAR";
        $ins1->save();

        $ins1 = new Institute();
        $ins1->name="FDER";
        $ins1->description="Facultad de Derecho";
        $ins1->save();
    }
}
