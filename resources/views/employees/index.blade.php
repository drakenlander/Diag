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
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-warning" href={{ route('employees.create') }}>Agregar Empleado</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      @foreach ($employees as $employee)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $employee->nombres }} {{ $employee->apellidos }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text"><b>Cédula:</b> {{ $employee->cedula }}</p>
            </div>
            <div class="card-body">
              <p class="card-text"><b>Ciudad:</b> {{ $employee->ciudad }}</p>
            </div>
            <div class="card-body">
              <p class="card-text"><b>Cargo:</b> {{ $employee->cargo }}</p>
            </div>
            <div class="card-body">
              <p class="card-text"><b>Salario:</b> C${{ $employee->salario }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('employees.edit', $employee->id) }}"
            class="btn btn-primary btn-sm">Editar</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>
