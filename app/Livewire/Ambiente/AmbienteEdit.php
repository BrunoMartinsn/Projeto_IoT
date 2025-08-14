<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $ambiente;

   

    public function salvar()
    {
       // $this->validate();

        $ambiente = Ambiente::findOrFail($this->ambiente);

       

        
        $ambiente->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            
        ]);

        
        return redirect()->route('ambiente-list')->with(['message' => 'Aluno atualizado com sucesso']);
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
