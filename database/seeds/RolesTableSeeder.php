<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'superadmin',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:17',
                'updated_at' => '2020-06-11 15:01:17',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'lider',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:17',
                'updated_at' => '2020-06-11 15:01:17',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'user',
                'guard_name' => 'web',
                'created_at' => '2020-06-11 15:01:17',
                'updated_at' => '2020-06-11 15:01:17',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Agente',
                'guard_name' => 'web',
                'created_at' => '2020-06-12 15:57:49',
                'updated_at' => '2020-06-12 15:57:49',
            ),
        ));
        
        
    }
}