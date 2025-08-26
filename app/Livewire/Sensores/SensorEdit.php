<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
   public $ambiente_id, $codigo, $tipo, $descricao, $status;


   

    public function salvar()
    {
       // $this->validate();

        $sensores = Sensor::findOrFail($this->sensors);

       

        
        $sensores->update([
           'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo'=> $this->tipo,
            'descricao' => $this->descricao,
            'status'=> $this->status
        ]);

        
        return redirect()->route('sensor-index')->with(['message' => 'sensor atualizado com sucesso']);
    }
    public function render()
    {
         $ambientes = Ambiente::all();
        return view('livewire.sensores.sensor-edit', compact('ambientes'));
    }
}
