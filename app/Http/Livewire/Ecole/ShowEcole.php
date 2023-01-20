<?php

namespace App\Http\Livewire\Ecole;

use App\Models\Ecole;
use App\Models\Enseignement;
use Livewire\Component;

class ShowEcole extends Component
{
    public $ecoles;
    // public $enseignements;
    protected $listeners = ['reloadEcole'];

    public function mount()
    {
        $this->ecoles =Ecole::get();

    }

    public function render()
    {
        $enseignements =Enseignement::get();
        return view('livewire.ecole.show-ecole',['enseignements' => $enseignements]);
    }

    public function reloadEcole($etablissement_id,$query)
    {
        $this->ecoles = Ecole::query();

        if ($etablissement_id) {
            $this->ecoles =$this->ecoles->where('etablissement',$etablissement_id);
        }


        if ($query) {
            $this->ecoles =$this->ecoles->where('ecole', 'like',"%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('etablissement', 'like', "%$query%")
            ->orWhere('adresse', 'like', "%$query%");
        }

        // if ($systeme_id) {
        //     $this->ecoles =$this->ecoles->where('sytemeEducation_id',$systeme_id);
        // }

        $this->ecoles = $this->ecoles->get();

    }
}
