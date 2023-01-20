<?php

namespace Database\Seeders;

use App\Models\Domaine;
use Illuminate\Database\Seeder;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Achats = new Domaine;
        $Achats->nom ='Achats';
        $Achats->save();

        $Commercial = new Domaine;
        $Commercial->nom ='Commercial, Vente';
        $Commercial->save();

        $Gestion = new Domaine;
        $Gestion->nom ='Gestion';
        $Gestion->save();

        $Comptabilite = new Domaine;
        $Comptabilite->nom ='Comptabilite';
        $Comptabilite->save();

        $Banque = new Domaine;
        $Banque->nom ='Banque, Finance';
        $Banque->save();

        $Informatique = new Domaine;
        $Informatique->nom ='Informatique';
        $Informatique->save();

        $Management = new Domaine;
        $Management->nom ='Management';
        $Management->save();

        $Medecine = new Domaine;
        $Medecine->nom ='Medecine';
        $Medecine->save();

        $Santé = new Domaine;
        $Santé->nom ='Santé, Pharmacie';
        $Santé->save();

        $Marketing = new Domaine;
        $Marketing->nom ='Marketing, Communication';
        $Marketing->save();

        $TL = new Domaine;
        $TL->nom ='Transport, Logistique';
        $TL->save();

        $GP = new Domaine;
        $GP->nom ='Gestion de Projet';
        $GP->save();

        $Tourisme = new Domaine;
        $Tourisme->nom ='Tourisme';
        $Tourisme->save();

        $Hotellerie = new Domaine;
        $Hotellerie->nom ='Hotellerie, Restauration';
        $Hotellerie->save();

        $Callcenter = new Domaine;
        $Callcenter->nom ='Callcenter';
        $Callcenter->save();

        $RH = new Domaine;
        $RH->nom ='Ressources Humaines';
        $RH->save();

        $Sport = new Domaine;
        $Sport->nom ='Sport, action culturelle et sociale';
        $Sport->save();

        $Secretariat = new Domaine;
        $Secretariat->nom ='Secretariat, Assistant';
        $Secretariat->save();

        $Services = new Domaine;
        $Services->nom ='Services';
        $Services->save();



    }
}
