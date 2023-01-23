<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CycleSeeder;
use Database\Seeders\EnseignementSeeder;
use Database\Seeders\SystemeEducatifSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(ContratTypeSeeder::class);
        $this->call(ContratModeSeeder::class);
        $this->call(MethodeTravailSeeder::class);
        $this->call(DomaineSeeder::class);
        $this->call(NiveauSeeder::class);
        $this->call(SpecialiteSeeder::class);
        $this->call(ModelSeeder::class);
        $this->call(SystemeEducatifSeeder::class);
        $this->call(EnseignementSeeder::class);
        $this->call(CycleSeeder::class);
        $this->call(UserSeeder::class);


    }
}
