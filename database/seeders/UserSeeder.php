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

        $student = new User();
        $student->name="laucha";
        $student->email="laucha@student.com";
        $student->password = Hash::make('_student');
        $student->type_of_user="student";
        $student->save();

        $student1 = new User();
        $student1->name="jaco";
        $student1->email="jaco@student.com";
        $student1->password = Hash::make('_student');
        $student1->type_of_user="student";
        $student1->save();

        $student2 = new User();
        $student2->name="tomba";
        $student2->email="tomba@student.com";
        $student2->password = Hash::make('_student');
        $student2->type_of_user="student";
        $student2->save();

        $student3 = new User();
        $student3->name="cacique";
        $student3->email="cacique@student.com";
        $student3->password = Hash::make('_student');
        $student3->type_of_user="student";
        $student3->save();

    }
}
