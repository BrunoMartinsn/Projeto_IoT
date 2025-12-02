<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{
    public $search = '';
    public $perPage = 10;
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['execept' => 10],

    ];
 public function render()
    {
         $registro = Registro::all();
         $registro = Registro::where('sensor_id', 'like', "%{$this->search}%")
         ->orwhere('unidade', 'like',"%{$this->search}%")
          ->orwhere('data_hora', 'like',"%{$this->search}%")
          ->orwhere('valor', 'like',"%{$this->search}%")
          ->paginate($this->perPage);

        return view('livewire.registro.registro-index', compact('registros'));
    }
}
