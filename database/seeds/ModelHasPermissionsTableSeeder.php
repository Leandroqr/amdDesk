<?php

use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_permissions')->delete();
        
        \DB::table('model_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 33,
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ),
            1 => 
            array (
                'permission_id' => 34,
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 95,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            3 => 
            array (
                'permission_id' => 96,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            4 => 
            array (
                'permission_id' => 100,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            5 => 
            array (
                'permission_id' => 101,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            6 => 
            array (
                'permission_id' => 105,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            7 => 
            array (
                'permission_id' => 106,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            8 => 
            array (
                'permission_id' => 110,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            9 => 
            array (
                'permission_id' => 111,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            10 => 
            array (
                'permission_id' => 115,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            11 => 
            array (
                'permission_id' => 116,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            12 => 
            array (
                'permission_id' => 125,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
            13 => 
            array (
                'permission_id' => 126,
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ),
        ));
        
        
    }
}