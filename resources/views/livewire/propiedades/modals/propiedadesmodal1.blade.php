<!-- MODAL DATOS PROPIEDAD1  -->
<!-- =====================  -->
<div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
               <h4 class="modal-title">Datos de la Propiedad</h4>
               <button type="button" class="btn btn-default" wire:click="openclose1()"><span aria-hidden="true">×</span></button>
               {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                     aria-hidden="true">×</span></button> --}}
         </div>
         <div class="modal-body">
               <form action="" class="form-horizontal">
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Domicilio</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3" placeholder="Domicilio">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Padrón Territorial</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3" placeholder="Padrón Territorial">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Padrón Municipal</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3" placeholder="Padrón Municipal">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Titular Registral</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3" placeholder="Titular Registral">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Nomenclatura Catastral</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3"
                              placeholder="Nomenclatura Catastral">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Número de Plano</label>
                     <div class="col-sm-6">
                           <input type="text" class="form-control" id="inputtext3" placeholder="Número de Plano">
                     </div>
                  </div>
               </form>
         </div>
         <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" wire:click="openclose1()">Close</button>
               {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> --}}
               <button type="button" class="btn btn-primary">Guardar</button>
         </div>

         {{-- @include('livewire.propiedadescreate') --}}
      </div>
   </div>
</div>
