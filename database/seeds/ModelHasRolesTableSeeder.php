<?php

use Illuminate\Database\Seeder;

class ModelHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_roles')->delete();
        
        \DB::table('model_has_roles')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Models\\User',
                'model_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 2,
            ),
            2 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ),
            3 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Models\\User',
                'model_id' => 4,
            ),
            4 => 
            array (
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'model_id' => 5,
            ),
            5 => 
            array (
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            6 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Models\\User',
                'model_id' => 8,
            ),
            7 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 9,
            ),
            8 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 11,
            ),
            9 => 
            array (
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'model_id' => 12,
            ),
            10 => 
            array (
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'model_id' => 13,
            ),
            11 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 14,
            ),
            12 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 15,
            ),
            13 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 16,
            ),
            14 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 17,
            ),
            15 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 18,
            ),
            16 => 
            array (
                'role_id' => 9,
                'model_type' => 'App\\Models\\User',
                'model_id' => 19,
            ),
        ));
        
        
    }
}