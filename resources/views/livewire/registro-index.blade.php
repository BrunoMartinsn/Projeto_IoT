<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-4">

            <div class="d-flex justify-content-between align-items-center mb-3 ">

                

                <form class="d-flex">

                    <input class="form-control me-4 " type="search" name="search" placeholder="Buscar por Registro"
                        aria-label="search " wire:model.live="search">

                    <button class="btn btn-outline-primary" type="submit">Buscar</button>

                </form>

            </div>
            
        </div>

        <div class="card">

            <div class="shadow rounded-3 row mb-4">

                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: rgb(0, 0, 0)">

                    <h5 class="mb-0">Registro</h5>

                    

                        
                    </a>

                </div>
            </div>


            <div class="card-body">
               

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                             <tr>
                    <th>ID</th>
                    <th>Sensor ID</th>
                    <th>Valor</th>
                    <th>Unidade</th>
                    <th>Data e Hora</th>
                    <th>Ações</th>
                </tr>
                        </thead>
                        <tbody>

                             @forelse($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->sensor->id }}</td>
                        <td>{{ $registro->valor }}</td>
                        <td>{{ $registro->unidade }}</td>
                        <td>{{ $registro->data_hora }}</td>
                                  

                                    <td>

                                      
                                        
                                        <button wire:click="delete({{$registro->id}})"
                                            class="btn btn-sm btn-danger"wire:confirm = "Tem certeza que deseja excluir">
                                            <i class="bi bi-trash"></i>
                                        </button>
    


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum aluno encontrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    
                </div>
            </div>

        </div>