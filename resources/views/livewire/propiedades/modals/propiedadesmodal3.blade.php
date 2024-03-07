<!-- MODAL DATOS PROPIEDAD 3 -->
<!-- =====================  -->
{{-- <div class="modal fade" id="propiedad3" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-xl"> --}}
<div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
               <h4 class="modal-title">Coeficientes</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true" wire:click="openclose3()">×</span>
               </button>
         </div>
         <div class="modal-body">
               {{-- <form action="" class="form-horizontal"> --}}
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Esquina</label>
                     <div class="col-sm-6">
                           <select class="form-control" placeholder="Coeficiente de Esquina"
                              wire:model="cmbcoeficiente_esquinas">
                              <option value="1">-</option>
                              @foreach ($coeficiente_esquinas as $coeficiente_esquina)
                                 <option value="{{ $coeficiente_esquina->id }}">
                                       {{ $coeficiente_esquina->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Forma</label>
                     <div class="col-sm-6">
                           <select class="form-control" placeholder="Coeficiente de Forma"
                              wire:model="cmbcoeficiente_formas">
                              <option value="1">-</option>
                              @foreach ($coeficiente_formas as $coeficiente_forma)
                                 <option value="{{ $coeficiente_forma->id }}">
                                       {{ $coeficiente_forma->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                           Topografía</label>
                     <div class="col-sm-6">
                           <select class="form-control"
                              placeholder="Coeficiente de
                        Topografía"
                              wire:model="cmbcoeficiente_topografias">
                              <option value="1">-</option>
                              @foreach ($coeficiente_topografias as $coeficiente_topografia)
                                 <option value="{{ $coeficiente_topografia->id }}">
                                       {{ $coeficiente_topografia->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Pavimento y
                           Servivio</label>
                     <div class="col-sm-6">
                           <select class="form-control"
                              placeholder="Coeficiente de Pavimento y
                        Servivio"
                              wire:model="cmbcoeficiente_pavimentoyservicios">
                              <option value="1">-</option>
                              @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                                 <option value="{{ $coeficiente_pavimentoyservicio->id }}">
                                       {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                           Ubicación</label>
                     <div class="col-sm-6">
                           <select class="form-control"
                              placeholder="Coeficiente de
                        Ubicación"
                              wire:model="cmbcoeficiente_ubicaciones">
                              <option value="1">-</option>
                              @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacione)
                                 <option value="{{ $coeficiente_ubicacione->id }}">
                                       {{ $coeficiente_ubicacione->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                     <div class="col-sm-6">
                           <select class="form-control" placeholder="Coeficiente de Oferta"
                              wire:model="cmbcoeficiente_ofertas">
                              <option value="1">-</option>
                              @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                 <option value="{{ $coeficiente_oferta->id }}">
                                       {{ $coeficiente_oferta->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente Zonal:</label>
                     <div class="col-sm-6">
                           <select class="form-control" placeholder="Coeficiente Zonal" wire:model="cmbcoeficiente_zonal">
                              <option value="1">-</option>
                              @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                 <option value="{{ $coeficiente_oferta->id }}">
                                       {{ $coeficiente_oferta->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Rescticciones o afectaciones desvalorizantes</label>
                     <div class="col-sm-6">
                           <select class="form-control"
                              placeholder="Coeficiente de Rescticciones o
                        afectaciones desvalorizantes"
                              wire:model="cmbcoeficiente_restricciones">
                              <option value="1">-</option>
                              @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                 <option value="{{ $coeficiente_oferta->id }}">
                                       {{ $coeficiente_oferta->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Fuente Informante</label>
                     <div class="col-sm-4">
                           <select class="form-control"
                              placeholder="Coeficiente de Fuente Informante" wire:model="cmbcoeficiente_fuenteinformantes">
                              <option value="1">-</option>
                              @foreach ($coeficiente_fuenteinformantes as $coeficiente_fuenteinformante)
                                 <option value="{{ $coeficiente_fuenteinformante->id }}">
                                       {{ $coeficiente_fuenteinformante->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Actualizaciones</label>
                     <div class="col-sm-4">
                           <select class="form-control"
                              placeholder="Coeficiente de Actualizaciones" wire:model="cmbcoeficiente_actualizaciones">
                              <option value="1">-</option>
                              @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                                 <option value="{{ $coeficiente_actualizacion->id }}">
                                       {{ $coeficiente_actualizacion->descripcion }}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
               {{-- </form> --}}
         </div>
         <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal"
                  wire:click="openclose3()">Cerrar</button>
               <button type="button" class="btn btn-primary" wire:click="A3Guardar()">Guardar</button>
         </div>
      </div>
   </div>
</div>
