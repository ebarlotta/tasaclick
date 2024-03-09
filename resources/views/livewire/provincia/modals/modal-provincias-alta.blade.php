<!-- MODAL DATOS PROVINCIA  -->
<!-- =====================  -->
<div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Datos de la Provincia</h4>
            <button type="button" class="btn btn-default" wire:click="isModalAlta()"><span aria-hidden="true">×</span></button>
         </div>
         <div class="modal-body">
               <div class="form-group row">
                  <label for="inputtext3" class="col-sm-6 col-form-label">Nombre de la Provincia</label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre de la provincia" wire:model="nombreprovincia">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputtext3" class="col-sm-6 col-form-label">País</label>
                  <div class="col-sm-6">
                        <select wire:model="pais_id" class="col-sm-12 col-form-label">
                           <option value="">-</option>
                           @foreach($paises as $pais)
                              <option value="{{ $pais->id}}">{{ $pais->descripcion }}</option>
                           @endforeach
                        </select>
                  </div>
               </div>
         </div>
         <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" wire:click="isModalAlta()">Cerrar</button>
               <button type="button" class="btn btn-primary" wire:click="A1Guardar()">Guardar</button>
         </div>
      </div>
   </div>
</div>
