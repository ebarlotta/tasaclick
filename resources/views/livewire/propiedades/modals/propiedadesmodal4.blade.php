<!-- MODAL DATOS PROPIEDAD 4 ANTECEDENTES3 -->
<!-- ====================================  -->

<div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
   <div class="modal-dialog" style="width: 50%; max-width: 100%">
      <div class="modal-content">
         <div class="modal-header">
               <h4 class="modal-title">Coeficientes</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true" wire:click="openclose4()">×</span>
               </button>
         </div>
         <div class="modal-body">
            <table>
               <tr>
                  <td style="vertical-align: top;" class="col-5">
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-4 col-form-label">Fecha</label>
                        <div class="col-sm-6">
                           <input type="date" class="form-control" id="inputtext3" placeholder="Fecha" wire:model="txtfecha">
                        </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Dirección</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Dirección" wire:model="txtdireccion">
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Precio</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Precio" wire:model="txtprecio">
                           </div>
                     </div>
                     {{-- <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Valor Unitario</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Valor Unitario" wire:model="txtvalorunitario">
                           </div>
                     </div> --}}
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Superficie</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Superficie" wire:model="txtsuperficie">
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Frente</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Frente"wire:model="txtfrente">
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Fondo</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Fondo" wire:model="txtfondo">
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Ubicación GPS</label>
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputtext3" placeholder="Ubicación GPS" wire:model="txtubicaciongps">
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Departamento</label>
                           <div class="col-sm-6">
                              <select class="form-control" placeholder="Departamento" wire:model="txtdepartamentos">
                                 <option value="1">-</option>
                                 @foreach ($departamentos as $departamento)
                                       <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}
                                       </option>
                                 @endforeach
                              </select>
                           </div>
                     </div>
                     <div class="form-group row">
                           <label for="inputtext3" class="col-sm-4 col-form-label">Zona</label>
                           <div class="col-sm-6">
                              <select class="form-control" placeholder="Zonas" wire:model="txtzonas">
                                 <option value="1">-</option>
                                 @foreach ($zonas as $zona)
                                       <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                                 @endforeach
                              </select>
                           </div>
                     </div>
                  </td>
                  <td style="vertical-align: top; " class="col-7">
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Esquina</label>
                        <div class="col-sm-4">
                              <select class="form-control" placeholder="Coeficiente de Esquina" wire:model="cmbcoeficiente_esquinas">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_esquinas as $coeficiente_esquina)
                                    <option value="{{ $coeficiente_esquina->id }}">
                                          {{ $coeficiente_esquina->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Forma</label>
                        <div class="col-sm-4">
                              <select class="form-control" placeholder="Coeficiente de Forma" wire:model="cmbcoeficiente_formas">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_formas as $coeficiente_forma)
                                    <option value="{{ $coeficiente_forma->id }}">
                                          {{ $coeficiente_forma->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Topografía</label>
                        <div class="col-sm-4">
                              <select class="form-control" placeholder="Coeficiente de Topografía" wire:model="cmbcoeficiente_topografias">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_topografias as $coeficiente_topografia)
                                    <option value="{{ $coeficiente_topografia->id }}">
                                          {{ $coeficiente_topografia->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Pavimento y Servivio</label>
                        <div class="col-sm-4">
                              <select class="form-control"
                                 placeholder="Coeficiente de Pavimento y Servivio" wire:model="cmbcoeficiente_pavimentoyservicios">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                                    <option value="{{ $coeficiente_pavimentoyservicio->id }}">
                                          {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de
                              Ubicación</label>
                        <div class="col-sm-4">
                              <select class="form-control" placeholder="Coeficiente de Ubicación" wire:model="cmbcoeficiente_ubicaciones">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacione)
                                    <option value="{{ $coeficiente_ubicacione->id }}">
                                          {{ $coeficiente_ubicacione->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Oferta</label>
                        <div class="col-sm-4">
                              <select class="form-control" placeholder="Coeficiente de Oferta" wire:model="cmbcoeficiente_ofertas">
                                 <option value="1">-</option>
                                 @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                    <option value="{{ $coeficiente_oferta->id }}">
                                          {{ $coeficiente_oferta->descripcion }}</option>
                                 @endforeach
                              </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente Zonal:</label>
                        <div class="col-sm-4">
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
                        <label for="inputtext3" class="col-sm-8 col-form-label">Coeficiente de Rescticciones o afectaciones desvalorizantes</label>
                        <div class="col-sm-4">
                              <select class="form-control"
                                 placeholder="Coeficiente de Rescticciones o afectaciones desvalorizantes" wire:model="cmbcoeficiente_restricciones">
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
                  </td>            
               </tr>
            </table>
         </div>
         <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal"
                  wire:click="openclose4()">Cerrar</button>
               <button type="button" class="btn btn-primary" wire:click="B1Guardar()">Guardar</button>
         </div>
      </div>
   </div>
</div>