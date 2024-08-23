<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Employees</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('employees.index') }}>Diagnóstica</a>
    </div>
  </nav>
  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Agregar un Empleado</h3>
        <br>
        <form action="{{ route('employees.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
          </div>
          <br>
          <div class="form-group">
            <label for="body">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
          </div>
          <br>
          <div class="form-group">
            <label for="body">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
          </div>
          <br>
          <div class="form-group">
            <label for="body">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
          </div>
          <br>
          <div class="form-group">
            <label for="body">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
          </div>
          <br>
          <div class="form-group">
            <label for="body">Salario (C$)</label>
            <input type="text" class="form-control" id="salario" name="salario" required>
          </div>
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Agregar Empleado</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
