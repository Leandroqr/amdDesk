<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AplicacionesTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(MatrizopsTableSeeder::class);
        $this->call(ModeloatencionTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(SeccionesTableSeeder::class);
        $this->call(TipoclsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(SgiactivoincidentesTableSeeder::class);
        $this->call(SgiestadoactualincidentesTableSeeder::class);
        $this->call(SgiestadoincidentesTableSeeder::class);
        $this->call(SgilugarincidentesTableSeeder::class);
        $this->call(SgitipoincidentesTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(SgimatrizincidentesTableSeeder::class);
        $this->call(SgiprioridadincidentesTableSeeder::class);
    }
}
