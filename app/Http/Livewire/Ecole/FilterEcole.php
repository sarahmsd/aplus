<?php

namespace App\Http\Livewire\Ecole;

use App\Models\systemeEducatif;
use Livewire\Component;

class FilterEcole extends Component
{
    public $etablissement_id;
    public $query;

    public function render()
    {
        $SystemeEdicatifs = systemeEducatif::get();
        return view('livewire.ecole.filter-ecole',['systemeEducatifs' => $SystemeEdicatifs]);
    }

    public function filter()
    {
        $this->emitTo('ecole.show-ecole','reloadEcole',$this->etablissement_id, $this->query);
    }
}
