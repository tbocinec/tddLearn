<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
            [
                'name' => 'Administrátor'
            ],
            [
                'name' => 'Študent'
            ],
            [
                'name' => 'Učiteľ'
            ],
        ]);
    }
}
