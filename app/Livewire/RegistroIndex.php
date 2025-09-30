<?php

namespace App\Livewire;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{
     public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
           $registros = Registro::orderBy('id', 'desc')->get();
        $registros = Registro::where('id', 'like', "%{$this->search}%")
        ->paginate(15);

        return view('livewire.registro-index', compact("registros"));
    }
      public function delete($id)
    {
        $registro = Registro::find($id);
        if ($registro != null) {
            $registro->delete();
        }

        session()->flash('success', 'registro deletado com sucesso.');
    }
}
