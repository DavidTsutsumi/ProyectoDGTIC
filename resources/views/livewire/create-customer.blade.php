<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
          Crea Cliente
        </div>
        <div class="card-body">
          
            <form wire:submit='save'>
                <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input id="name" wire:model="name" type="text" class="form-control" aria-describedby="nameHelp">
                  @error('name') <span class="error text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección de Correo Electrónico</label>
                    <input id="email" wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                    @error('email') <span class="error text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input id="phone" wire:model="phone" type="text" class="form-control" >
                  @error('phone') <span class="error text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Ciudad</label>
                  <input id="ciudad" wire:model="ciudad" type="text" class="form-control">
                  @error('ciudad') <span class="error text-sm">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label">Codigo postal</label>
                  <input id="cp" wire:model="cp" type="text" class="form-control">
                  @error('cp') <span class="error text-sm">{{ $message }}</span> @enderror
              </div>
                <button type="submit" class="btn btn-primary " onclick="return confirm('¿Estás seguro de enviar el formulario?')" >Submit</button>

              </form>
              @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

        </div>
      </div>
</div>
