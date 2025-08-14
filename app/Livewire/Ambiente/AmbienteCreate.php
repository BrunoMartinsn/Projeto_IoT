<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    

    public function store()
    {
        

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
    
            
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('ambiente-list');

       
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
