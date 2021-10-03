<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gestor de Secciones
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#crearseccion">Agregar Articulos</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-hover table-striped TablaUsuario" id="tbl">
          <thead>
            <tr>
              <th>Nº</th>
              <th>Titulo</th>
              <th>Descripcion</th>
              <th>Cantidad</th>
              <th>Estado</th>
              <th>Editar/Desactivar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $mostrarUsuarios = new seccionC;
            $mostrarUsuarios->listadeseccion();

            $valor = null;
            $editarUsuario = seccionC::editarRegistroseccionC($valor);
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'crearseccion.php'; ?>
<?php include 'editseccion.php'; ?>
<?php
$desactivarSeccion = new seccionC;
$desactivarSeccion -> DesactivarseccionC();
?>