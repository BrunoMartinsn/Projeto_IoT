<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;


    protected $rules = [
        'nome' => 'required',
        'descricao' => 'required',
        'status' => 'required'
       
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'descricao.required' => 'O campo é obrigatório',
       

     
    ];

     public function store()
    {
$this->validate();
        Ambiente::Create([
            'nome' => $this -> nome,
            'descricao' => $this -> descricao,
          
        ]);

        session()->flash('message', 'Ambiente Criado com Sucesso. . .');
        $this->reset(['nome', 'descricao', 'status']);
        return redirect()->route('ambiente-list');

    }


    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
