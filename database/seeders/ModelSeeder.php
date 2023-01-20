<?php

namespace Database\Seeders;

use App\Models\Modele;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Abstrait = new Modele;
        $Abstrait->nom = 'Abstrait';
        $Abstrait->photo = 'abstract.png';
        $Abstrait->save();

        $Banniere = new Modele;
        $Banniere->nom = 'Banniere';
        $Banniere->photo = 'banner.png';
        $Banniere->save();

        $Carte = new Modele;
        $Carte->nom = 'Carte';
        $Carte->photo = 'card.png';
        $Carte->save();

        $Classique = new Modele;
        $Classique->nom = 'Classique';
        $Classique->photo = 'classic.png';
        $Classique->save();

        $Degrade = new Modele;
        $Degrade->nom = 'Degrade';
        $Degrade->photo = 'gradient.png';
        $Degrade->save();

        $Epure = new Modele;
        $Epure->nom = 'Epure';
        $Epure->photo = 'epure.png';
        $Epure->save();

        $Futuriste = new Modele;
        $Futuriste->nom = 'Futuriste';
        $Futuriste->photo = 'futuristic.png';
        $Futuriste->save();

        $Graphique = new Modele;
        $Graphique->nom = 'Graphique';
        $Graphique->photo = 'graphic.png';
        $Graphique->save();

        $Moderne = new Modele;
        $Moderne->nom = 'Moderne';
        $Moderne->photo = 'modern.png';
        $Moderne->save();

        $Mono = new Modele;
        $Mono->nom = 'Mono';
        $Mono->photo = 'mono.png';
        $Mono->save();

        $Simple = new Modele;
        $Simple->nom = 'Simple';
        $Simple->photo = 'simple.png';
        $Simple->save();

        $Structure = new Modele;
        $Structure->nom = 'Structure';
        $Structure->photo = 'structured.png';
        $Structure->save();

    }
}
