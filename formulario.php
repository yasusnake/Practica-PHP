<?php include 'header.php'; ?>

<section class="container" id="mainContainer">
  <h1>
    Datos del estudiante
  </h1>
  <form name="datosAlumnos">
    <fieldset>
      <legend>Información personal</legend>
      <div id="datosVacios"></div>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label for="Nombre">Nombre</label>
          <input id="nombre" class="form-control" type="text" name="Nombre" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="Apellido1">1er Apellido</label>
          <input id="apellido1" class="form-control" type="text" name="Apellido1" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="Apellido2">2do Apellido</label>
          <input id="apellido2" class="form-control" type="text" name="Apellido2" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="Nacimiento">Fecha de nacimiento</label>
          <input id="nacimiento" class="form-control" type="date" name="Nacimiento" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="Email">Email</label>
          <input id="email" class="form-control" type="email" name="Email" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="Telefono">Teléfono</label>
          <input id="telefono" class="form-control" type="number" name="Telefono" required>
        </div>
      </div>
    </fieldset>
    <fieldset class="mb-2">
      <legend>Dirección</legend>
      <div class="row">
        <div class="col-md-3 mb-2">
          <label for="Provincia">Provincia</label>
          <input id="provincia" class="form-control" type="text" name="Provincia" required>
        </div>
        <div class="col-md-3 mb-2">
          <label for="Canton">Canton</label>
          <input id="canton" class="form-control" type="text" name="Canton" required>
        </div>
        <div class="col-md-3 mb-2">
          <label for="Distrito">Distrito</label>
          <input id="distrito" class="form-control" type="text" name="Distrito" required>
        </div>
        <div class="col-md-3 mb-2">
          <label for="Barrio">Barrio</label>
          <input id="barrio" class="form-control" type="text" name="Barrio" required>
        </div>
        <div class="col-md-12 mb-2">
          <label for="Otros">Otras señas</label>
          <textarea id="otros" class="form-control" name="Otros" rows="4" cols="80" required></textarea>
        </div>
      </div>
    </fieldset>
    <input class="btn btn-primary mb-2" type="button" value="Guardar datos">
    <a href="table.html" class="btn btn-success mb-2">Ir al registro</a>
  </form>
</section>

<?php include 'footer.php'; ?>