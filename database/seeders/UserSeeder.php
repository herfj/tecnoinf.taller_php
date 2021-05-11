<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        //
        $admin = new User();
        $admin->name="admin";
        $admin->nickname="admin";
        $admin->email="admin@admin.com";
        $admin->password="_admin";
        $admin->type_of_user="admin";

        $admin->save();   //
    }
}
