<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header  btext-white" style="background-color: rgb(255, 255, 255)">
            <h4 class="mb-0">Editar Ambiente</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="salvar">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                    @error('nome')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror

                 
                </div>
                <div class="mb-3">
                    <label class="form-label">descricao</label>
                    <input type="text" class="form-control" wire:model.defer="descricao">
                    @error('descricao')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror

              

                </div>
               
              
                <div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{ route('ambiente-list') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>