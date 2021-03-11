<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4><strong>Administración:. Oficinas y/o Departamentos</strong></h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Administración</a></li>
                        <li class="breadcrumb-item active">Oficinas y/o Departamentos</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-sitemap"></i>&nbsp; Mantenimiento Oficinas y/o Departamentos
                </h3>
            </div>
            <div class="card-body">
                <button type="btn" class="btn btn-secondary" data-toggle="modal" data-target="#modal-registrar-ubicacion"><i class="fas fa-plus-circle"></i> Registrar Oficina o Departamento
                </button>
            </div>
            <div class="card-body">
                <table id="tablaAreas" class="table table-bordered table-hover dt-responsive tablaAreas">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 10px">Logo</th>
                            <th>Oficina o Departamento</th>
                            <th>Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 10px">Logo</th>
                            <th>Oficina o Departamento</th>
                            <th>Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<div id="modal-registrar-ubicacion" class="modal fade" role="dialog" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" role="form" method="post">
                <div class="modal-header text-center" style="background: #6c757d; color: white">
                    <h4 class="modal-title">Registrar Oficina y/o Departamento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="newArea">Oficina/Departamento</label>
                            <i class="fas fa-map"></i> *
                            <input type="text" name="newArea" id="newArea" class="form-control" placeholder="Ingrese detalle de área" required autocomplete="off" autofocus="autofocus">
                        </div>

                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-save"></i> Guardar</button>
                    <button type="reset" class="btn btn-danger"><i class="fas fa-eraser"></i> Limpiar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i> Salir</button>
                </div>
                <?php
                $registrarArea = new ControladorAreas();
                $registrarArea->ctrRegistrarArea();
                ?>
            </form>
        </div>
    </div>
</div>

<div id="modal-editar-ubicacion" class="modal fade" role="dialog" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" role="form" method="post">
                <div class="modal-header text-center" style="background: #6c757d; color: white">
                    <h4 class="modal-title">Editar Oficina y/o Departamento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="edtArea">Oficina/Departamento</label>
                            <i class="fas fa-map"></i> *
                            <input type="text" name="edtArea" id="edtArea" class="form-control" required autocomplete="off" autofocus="autofocus">
                            <input type="hidden" name="idArea" id="idArea" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-save"></i> Guardar</button>
                    <button type="reset" class="btn btn-danger"><i class="fas fa-eraser"></i> Limpiar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i> Salir</button>
                </div>
                <?php
                $editarArea = new ControladorAreas();
                $editarArea->ctrEditarArea();
                ?>
            </form>
        </div>
    </div>
</div>

<?php
$eliminarArea = new ControladorAreas();
$eliminarArea->ctrEliminarArea();
?>