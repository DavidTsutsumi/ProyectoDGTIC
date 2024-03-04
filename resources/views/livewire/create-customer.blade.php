<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
          Crea Cliente
        </div>
        <div class="card-body">
          
            <form wire:submit='save'>
                <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input wire:model="name" type="text" class="form-control" aria-describedby="nameHelp">
                  @error('name') <span>{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección de Correo Electrónico</label>
                    <input wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                    @error('email') <span>{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input wire:model="phone" type="text" class="form-control" >
                  @error('phone') <span>{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary " onclick="return confirm('¿Estás seguro de enviar el formulario?')" >Submit</button>
              </form>

        </div>
      </div>
</div>
