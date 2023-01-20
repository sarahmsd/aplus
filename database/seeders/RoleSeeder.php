<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Postulant = new Role;
        $Postulant->nom = 'Postulant';
        $Postulant->save();

        $PorteurDeProjet = new Role;
        $PorteurDeProjet->nom = 'PorteurDeProjet';
        $PorteurDeProjet->save();

        $Recruteur = new Role;
        $Recruteur->nom = 'Recruteur';
        $Recruteur->save();

        $Investisseur = new Role;
        $Investisseur->nom = 'Investisseur';
        $Investisseur->save();

        $Admin = new Role;
        $Admin->nom = 'Admin';
        $Admin->save();
    }
}
