<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name="admin";
        $admin->email="admin@admin.com";
        $admin->password = Hash::make('_admin');
        $admin->type_of_user="admin";
        $admin->save();

        $teacher = new User();
        $teacher->name="laucha";
        $teacher->email="laucha@teacher.com";
        $teacher->password = Hash::make('_teacher');
        $teacher->type_of_user="teacher";
        $teacher->save();

        $teacher1 = new User();
        $teacher1->name="jaco";
        $teacher1->email="jaco@teacher.com";
        $teacher1->password = Hash::make('_teacher');
        $teacher1->type_of_user="teacher";
        $teacher1->save();

        $teacher2 = new User();
        $teacher2->name="tomba";
        $teacher2->email="tomba@teacher.com";
        $teacher2->password = Hash::make('_teacher');
        $teacher2->type_of_user="teacher";
        $teacher2->save();

        $teacher3 = new User();
        $teacher3->name="cacique";
        $teacher3->email="cacique@teacher.com";
        $teacher3->password = Hash::make('_teacher');
        $teacher3->type_of_user="teacher";
        $teacher3->save();

    }
}
