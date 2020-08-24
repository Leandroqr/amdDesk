<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'César Augusto Trujillo S.',
                'email' => 'cesar.trujillo@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$E3BP.eAhx6i6xR/H0fHPie26vxqQjhbe.Tk3YVWesOEtgaCMj3zxK',
                'remember_token' => '0HV2UNla4T6MH3fYxmysOkOLR8NPwfJWr1MXM6Me6amAhTjYHvbYZLrzdlw1',
                'created_at' => '2020-06-08 18:35:42',
                'updated_at' => '2020-06-08 18:35:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Agente1',
                'email' => 'agente1@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$alJmdN4s29.aJHg/h9oCfeLRd0D0e.gvNWFerxdK44MJPrJ/DFkZ.',
                'remember_token' => NULL,
                'created_at' => '2020-06-08 18:49:04',
                'updated_at' => '2020-06-08 18:49:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Juan Felipe Aldana Chaparro',
                'email' => 'jfaldana27@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GU1yKTuixlCCdKmFKbPxnOJY2BxSMZcESlqKqTt7i88a19C7wJdHK',
                'remember_token' => NULL,
                'created_at' => '2020-06-09 19:19:34',
                'updated_at' => '2020-06-09 19:19:34',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Oscar Melendez',
                'email' => 'oscar.melendez@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$g822KYq4x/HQBGOk1Njnre6xq0kbVi2bfiGxg7gvyV1hib441N.06',
                'remember_token' => NULL,
                'created_at' => '2020-06-09 19:30:24',
                'updated_at' => '2020-06-09 19:30:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Emanuel Castillo',
                'email' => 'ejcx@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QHqFNhUW77ogFf8ZKWvgc.jSw7n.GQJha8CIMO8L8t8CIWgUYjyTO',
                'remember_token' => NULL,
                'created_at' => '2020-06-09 19:36:46',
                'updated_at' => '2020-06-09 19:36:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ingrith Malaver',
                'email' => 'ingrith.malaver@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Nu/5utVN8UuSVG6E3kjmKeql8x73e4ZOh6PdehQURtGBXPot.0OZu',
                'remember_token' => NULL,
                'created_at' => '2020-06-09 19:47:09',
                'updated_at' => '2020-07-23 09:25:39',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Maria Malavera',
                'email' => 'maria.malavera@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b2vD9clhsBbHbqYnRg1sIOIbfhNX19lhtN7ajlrQ/339GA4f7AgKW',
                'remember_token' => NULL,
                'created_at' => '2020-06-16 22:04:11',
                'updated_at' => '2020-07-18 09:21:47',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Wilton Cortes',
                'email' => 'wiltoncort@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d66uSabB1BY6RtND9MUsg.WnUTLamOlVsGrKb7L.iJ1rkwk6kvMSy',
                'remember_token' => NULL,
                'created_at' => '2020-06-17 12:41:12',
                'updated_at' => '2020-06-17 12:41:12',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Edgar Rivera',
                'email' => 'edgar.rivera@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A4Qp6PiWmPvSdjz05sIgM.dG7sAB3p3qKUg.B1JeSwkScJAOuiuxG',
                'remember_token' => NULL,
                'created_at' => '2020-06-18 18:54:15',
                'updated_at' => '2020-06-18 18:54:15',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Derlybret Rodriguez Jaimes',
                'email' => 'derly.rodriguez@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.LsDx2sGIN706/YfsKCqQ.691ZXS1BqLEyL/sl/7ypO7cGnfa5eMS',
                'remember_token' => NULL,
                'created_at' => '2020-06-19 11:40:29',
                'updated_at' => '2020-06-19 11:40:29',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'Italo Leonardy Sánchez Quiñonez',
                'email' => 'italo.sanchez@amovil.co',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j5NiJYjkjbYUYRlVveDAsOsrpEQqUMwHsf5q/DyWYpDlBUMGMupNi',
                'remember_token' => NULL,
                'created_at' => '2020-06-19 13:51:31',
                'updated_at' => '2020-06-19 13:51:31',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Diego Parada',
                'email' => 'diegofpb42@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZYFImPKQVxco7/1HGBbkPuVwscffRqqHvKjXuoJaSqYXAcfBqCBxy',
                'remember_token' => '5dkxSEfoQhXzR31EYTxftkdHbQ0BidIgUElZd7FcRUnHkwZDuYAFK8sjreN0',
                'created_at' => '2020-06-19 14:16:15',
                'updated_at' => '2020-07-18 08:51:29',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'Narly Alvarez',
                'email' => 'narly_1807@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LBpEvGt39jrdAVGfeXJiWu.Acj8A/Do4qrRlltAb6rPWZ7L7aNwdi',
                'remember_token' => NULL,
                'created_at' => '2020-06-19 14:16:37',
                'updated_at' => '2020-07-22 19:59:12',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'Slendy Juliet Fernández',
                'email' => 'hsslendyher123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KhU8mkndZgmqAabmi7jFeOIqHeTOgQgaS984dTcumfNj0expQ28ui',
                'remember_token' => 's6kVrFumq1YDIrNDAiTrCFPcPPBtrUZsxddJC9130er7OfRiODzYBcZPGHPA',
                'created_at' => '2020-06-19 14:33:21',
                'updated_at' => '2020-06-22 13:16:57',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'Carolina',
                'email' => 'carito0809@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jGshSKPgCzP9hM8K6YKuQ..nM85/miTzptiqTcsWsYyWzlh8BkC.6',
                'remember_token' => 'svlsgF3iuj6DvGnWb0kNdJg4so4tiwwRsIlf06uU2unODHeyCPxp5S9f1sX4',
                'created_at' => '2020-06-22 10:29:20',
                'updated_at' => '2020-07-21 16:54:18',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Yurelly Paez Hernandez',
                'email' => 'yurellypaez-28@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YKSyuL9naVYzkYZe8VwOee9rFvgdNl0LLFmE6ZAe5LsnFLrGtGow2',
                'remember_token' => NULL,
                'created_at' => '2020-06-22 14:33:58',
                'updated_at' => '2020-06-22 14:33:58',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'Andres Diaz',
                'email' => 'sampraxandres.ad@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Rb/bMN5941JRbq6ayDexqOcQ53wgZTMCC4eNCWkmlh4jnfZ/tmKRm',
                'remember_token' => NULL,
                'created_at' => '2020-07-21 13:32:09',
                'updated_at' => '2020-07-21 13:32:09',
            ),
        ));
        
        
    }
}