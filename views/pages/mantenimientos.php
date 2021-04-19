<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4><strong>Soporte Técnico:. Mantenimientos</strong></h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">HelpDesk</a></li>
            <li class="breadcrumb-item active">Mantenimientos</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-clipboard-list"></i>
          Mantenimiento de Equipos
        </h3>
      </div>
      <div class="card-body">
        <button type="btn" class="btn btn-secondary mt-2" data-toggle="modal" data-target="#modal-registro-mantenimiento"><i class="fas fa-clipboard-list"></i> Registrar Mantenimiento</button>
      </div>
      <div class="card-body">
        <table id="tablaMantenimientos" class="table table-bordered table-hover dt-responsive tablaMantenimientos">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>N° Ficha</th>
              <th>F.Registro</th>
              <th>T.Equipo</th>
              <th>Serie</th>
              <th>Responsable</th>
              <th>Departamento/Oficina</th>
              <th>Servicio/Área</th>
              <th>Técnico</th>
              <th>Est.Atención</th>
              <th>Est.Ficha</th>
              <th>Opciones</th>
            </tr>
          </thead>
        </table>
        <input type="hidden" value="<?php echo $_SESSION['id']; ?>" id="idOculto">
      </div>
    </div>
  </section>
</div>
<?php
$anulMante = new ControladorMantenimientos();
$anulMante->ctrAnularMantenimiento();
?>

<!-- Modal Registro de Mantenimiento -->
<div id="modal-registro-" class="modal fade" role="dialog" aria-modal="true" style="padding-right: 17px;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <h1>a</h1>
    </div>
  </div>
</div>

<div id="modal-registro-mantenimiento" class="modal fade" role="dialog" aria-modal="true" style="padding-right: 17px;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form action="" role="form" id="formRegMant" method="post" class="frmManto1">
        <div class="modal-header text-center" style="background: #6c757d; color: white">
          <h4 class="modal-title">Registro Ficha de Mantenimiento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="font-weight-bolder text-gray">I. Datos Generales del Equipo</p>
          <div class="row">
            <div class="col-12 col-md-2">
              <div class="form-group">
                <label for="fechita">F.Registro &nbsp; <i class="fas fa-calendar-alt"></i> *</label>
                <input type="text" class="form-control" readonly value="<?php date_default_timezone_set('America/Lima');
                                                                        $fechaActual = date('d-m-Y');
                                                                        echo $fechaActual; ?>">
                <input type="hidden" name="uregMant" id="uregMant" value="<?php echo $_SESSION["id"]; ?>">
                <input type="hidden" name="segmentado" id="segmentado">
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="tipEquipo">Tipo de Equipo &nbsp;</label>
                <i class="fas fa-th"></i> *
                <select class="form-control" style="width: 100%;" name="tipEquipo" id="tipEquipo">
                  <option value="0">Seleccione Tipo de Equipo</option>
                  <?php
                  $itemSeg23 = null;
                  $valorSeg23  = null;
                  $cat23 = ControladorCategorias::ctrListarCategorias($itemSeg23, $valorSeg23);
                  foreach ($cat23 as $key => $value) {
                    echo '<option value="' . $value["idCategoria"] . '">' . $value["categoria"] . '</option>';
                  }
                  ?>
                </select>

              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="serieEQ">N° de Serie &nbsp;</label>
                <i class="fas fa-desktop"></i> *
                <select class="form-control" style="width: 100%;" name="serieEQ" id="serieEQ">
                  <option value="0">Seleccione tip EQ</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="tsegmento1">Segmento &nbsp;</label>
                <i class="fas fa-border-style"></i> *
                <select class="form-control" style="width: 100%;" name="tsegmento" id="tsegmento1">
                  <option value="0" id="tsegmento">Seleccione Serie EQ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="ofiEq1">Oficina/Dep &nbsp;</label>
                <i class="fas fa-sitemap"></i> *
                <select class="form-control" style="width: 100%;" name="ofiEq" id="ofiEq1">
                  <option value="0" id="ofiEq">Seleccione Serie EQ</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="servEq1">Área/Servicio &nbsp;</label>
                <i class="fas fa-building"></i> *
                <select class="form-control" style="width: 100%;" name="servEq" id="servEq1">
                  <option value="0" id="servEq">Seleccione Serie EQ</option>

                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="respEq1">Usuario Responsable &nbsp;</label>
                <i class="fas fa-user"></i> *
                <select class="form-control" style="width: 100%;" name="respEq" id="respEq1">
                  <option value="0" id="respEq">Seleccione Serie EQ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="">Información detallada del Equipo &nbsp;</label>
                <i class="fas fa-hashtag"></i> *
                <textarea class="form-control" name="detaEQ" id="detaEQ" cols="1" rows="2" placeholder="Detalle del Equipo" readonly></textarea>
              </div>
            </div>
          </div>
          <p class="font-weight-bolder text-gray">II. Diagnosticos Realizados</p>
          <div class="row mt-2">
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="fEva">F.Evaluación &nbsp;</label>
                <i class="fas fa-calendar-alt"></i> *
                <input type="text" name="fEva" id="fEva" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask autocomplete="off" placeholder="dd/mm/yyyy">
                <input type="hidden" id="fEvaC" name="fEvaC">
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="condInEQ">Cond. Inicial(EQ) &nbsp;</label>
                <i class="fas fa-thermometer-half"></i> *
                <select class="form-control" style="width: 100%;" name="condInEQ" id="condInEQ">
                  <option value="0">Seleccione Condición</option>
                  <?php
                  $itemCIM = null;
                  $valorCIM  = null;
                  $ciManto = ControladorSituacion::ctrListarSituacionManto($itemCIM, $valorCIM);
                  foreach ($ciManto as $key => $value) {
                    echo '<option value="' . $value["idSituacion"] . '">' . $value["situacion"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div class="form-group">
                <label for="tecEvEQ">Técnico Evaluador &nbsp;</label>
                <i class="fas fa-thermometer-half"></i> *
                <select class="form-control" style="width: 100%;" name="tecEvEQ" id="tecEvEQ">
                  <option value="0">Seleccione Técnico Evaluador</option>
                  <?php
                  $itemTecEva = null;
                  $valorTecEva  = null;
                  $tecEva = ControladorUsuarios::ctrListarTecnicos($itemTecEva, $valorTecEva);
                  foreach ($tecEva as $key => $value) {
                    echo '<option value="' . $value["id_usuario"] . '">' . $value["nombres"] . ' ' . $value["apellido_paterno"] . ' ' . $value["apellido_materno"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="descIniEQ">Descripción del Incidente inicial &nbsp;</label>
                <i class="fas fa-chalkboard-teacher"></i> * (Indicar el problema, falla o inconveniente que presenta el equipo)
                <input type="text" name="descIniEQ" id="descIniEQ" class="form-control" autocomplete="off" placeholder="Ingrese descripción del incidente">
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="">Diagnósticos Realizados &nbsp;</label>
                <i class="fas fa-laptop-medical"></i> * <span class="text-danger font-weight-bolder">Debe seleccionar al menos una opción</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="">
                  <option>Selecciona Diagnostico 1</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 2</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 3</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 4</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 5</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 6</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 7</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Diagnostico 8</option>
                </select>
              </div>
            </div>
          </div>
          <p class="font-weight-bolder text-gray">III. Descripción de Acciones realizadas</p>
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="priEvaEQ">Primera Evaluación &nbsp;</label>
                <i class="fas fa-camera-retro"></i> * (Impresión diagnóstica observada por el Tec. evaluador)
                <input type="text" name="priEvaEQ" id="priEvaEQ" class="form-control" autocomplete="off" placeholder="Ingrese descripción primera evaluación">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="fInicio">Fecha Inicio &nbsp;</label>
                <i class="fas fa-calendar-alt"></i> *
                <input type="text" name="fInicio" id="fInicio" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask autocomplete="off" placeholder="dd/mm/yyyy">
                <input type="hidden" name="fIniEv" id="fIniEv">
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="fFin">Fecha Fin &nbsp;</label>
                <i class="fas fa-calendar-alt"></i> *
                <input type="text" name="fFin" id="fFin" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask autocomplete="off" placeholder="dd/mm/yyyy">
                <input type="hidden" name="fFinEv" id="fFinEv">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label for="tipTrabEQ">Trabajo Realizado &nbsp;</label>
                <i class="fas fa-code-branch"></i> *
                <select class="form-control" style="width: 100%;" name="tipTrabEQ" id="tipTrabEQ">
                  <option value="0">Seleccione Trabajo realizado</option>
                  <?php
                  $itemTrabM = null;
                  $valorTrabM  = null;
                  $trabM = ControladorDiagnosticos::ctrListarTrabajosManto($itemTrabM, $valorTrabM);
                  foreach ($trabM as $key => $value) {
                    echo '<option value="' . $value["idTipoTrabajo"] . '">' . $value["tipoTrabajo"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="">Acciones Realizadas &nbsp;</label>
                <i class="fas fa-tools"></i> * <span class="text-danger font-weight-bolder">Debe seleccionar al menos una opción</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="">
                  <option>Selecciona Accion Realizada 1</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 2</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 3</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 4</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 5</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 6</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 7</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" style="width: 100%;" name="" id="" disabled>
                  <option>Selecciona Accion Realizada 8</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="form-group">
                <label for="recoFEQ">Recomendaciones u Observaciones finales &nbsp;</label>
                <i class="fas fa-comment-medical"></i> * (Recomendaciones después de finalizado el trabajo)
                <input type="text" name="recoFEQ" id="recoFEQ" class="form-control" autocomplete="off" placeholder="Ingrese Recomendación u observacion final">
              </div>
            </div>
          </div>
          <p class="font-weight-bolder text-gray">IV. Observaciones del estado del Equipo</p>
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="estAtEQ">Estado de Atención &nbsp;</label>
                <i class="fas fa-signal"></i> *
                <select class="form-control" style="width: 100%;" name="estAtEQ" id="estAtEQ">
                  <option value="0">Seleccione Est. Atención</option>
                  <?php
                  $itemTEstaAtM = null;
                  $valorTEstaAtM  = null;
                  $tEstaAtM = ControladorEstados::ctrListarEstadosAtencion($itemTEstaAtM, $valorTEstaAtM);
                  foreach ($tEstaAtM as $key => $value) {
                    echo '<option value="' . $value["idEstAte"] . '">' . $value["estAte"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="condFEQ">Cond. Final(EQ) &nbsp;</label>
                <i class="fas fa-thermometer-full"></i> *
                <select class="form-control" style="width: 100%;" name="condFEQ" id="condFEQ">
                  <option value="0">Seleccione Cond. Final</option>
                  <?php
                  $itemCondM = null;
                  $valorCondM  = null;
                  $CondM = ControladorSituacion::ctrListarSituacionManto($itemCondM, $valorCondM);
                  foreach ($CondM as $key => $value) {
                    echo '<option value="' . $value["idSituacion"] . '">' . $value["situacion"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="tercEq">Serv. Terceros &nbsp;</label>
                <i class="fas fa-thermometer-full"></i> *
                <select class="form-control" style="width: 100%;" name="tercEq" id="tercEq">
                  <option value="SI">SI</option>
                  <option value="NO" selected>NO</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-11 col-md-1 col-lg-1 col-xl-1">
              <label>Otros</label>
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
              <div class="input-group">
                <div class="icheck-dark d-inline">
                  <input type="radio" id="radiorep1" name="obsOtros" value="SI">
                  <label for="radiorep1"> SI
                  </label>&nbsp;&nbsp;
                </div>
                <div class="icheck-dark d-inline">
                  <input type="radio" id="radiorep2" name="obsOtros" value="NO" checked>
                  <label for="radiorep2"> NO
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="form-group">
                <input type="text" name="detalleOtros" id="detalleOtros" class="form-control" autocomplete="off" readonly placeholder="Detalle otros">
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-secondary" id="btnRegMant"><i class="fas fa-save"></i> Guardar</button>
          <button type="reset" class="btn btn-danger"><i class="fas fa-eraser"></i> Limpiar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i> Salir</button>
        </div>
      </form>
    </div>
  </div>
</div>