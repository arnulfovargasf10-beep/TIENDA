
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            CLIENTE
        </a>
    </div>
</nav>

<div class="container py-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-1">CLIENTE</h3>
                    <p class="text-muted mb-0">
                    </p>
                </div>
                <button type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalCliente">
                    + Agregar cliente
                </button>
            </div>
        </div>

        <div class="card-body p-0">
          
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
            <div class="alert theme-warning" role="alert">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
          
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($clientes as $Cliente)
                            <tr>
                                <td>{{$Cliente->id}}</td>
                                <td>{{$Cliente->codigo}}</td>
                                <td>{{$Cliente->nombre}}</td>
                                <td>{{$Cliente->apellido}}</td>
                                <td>{{$Cliente->email}}</td>
                                <td>{{$Cliente->telefono}}</td>
                                <td>{{$Cliente->direccion}}</td>

                                <td>
                                @if($Cliente->estado == 1)<span class="badge bg-success">Activo</span>
                                @else 
                                  <span class="badge bg-primary">Inactivo</span>
                                @endif
                                </td>

                                <!-Botones-!>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#"
                                           class="btn btn-sm btn-dark">
                                            Editar
                                        </a>
                                  <form action="{{route('Cliente.destroy', $Cliente->id)}}" method="PUT">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger">
                                            Eliminar
                                        </button>
                                  </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"
                                    class="text-center text-muted py-4">
                                    No hay registros de clientes.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

        <div class="card-footer bg-white text-muted">
            Sistema de gestión de clientes
        </div>

    </div>
</div>

<!-- Modal para agregar cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1"
     aria-labelledby="modalClienteLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalClienteLabel">
                    Agregar nuevo cliente
                </h5>

                <button type="button"
                        class="btn-close btn-close-white"data-bs-dismiss="modal"aria-label="Cerrar">
                  </button>
            </div>

            <div class="modal-body">
                <form id="formAgregarCliente" action="{{route('Cliente.store')}}" method="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">
                          Nombre
                        </label>
                        <input type="text" id="nombre"class="form-control"
                         value="{{(old('nombre', $Cliente->nombre)}}"
                         required>                        
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">
                            Apellido
                        </label>
                        <input type="text" id="apellido"class="form-control" 
                        value="{{old('apellido', $Cliente->apellido)}}"
                        required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Correo electrónico
                        </label>
                        <input type="email" id="emai"class="form-control"
                        value="{{old('email', $Cliente->email)}}"
                        required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">
                            Teléfono
                        </label>
                        <input type="text" id="telefono"class="form-control"
                         value="{{old('telefono', $Cliente->telefono)}}"
                        required>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">
                            Dirección
                        </label>
                        <input type="text" id="direccion"class="form-control"
                        value="{{old('direccion', $Cliente->direccion)}}"
                        required>
                        <textarea id="direccion"class="form-control"rows="2">
                       </textarea>
                    </div>
                </form>
            </div>
          <div class="modal-footer">
            <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal">
                Cancelar
              </button>
            <button type="submit"
                  form="formAgregarCliente"
                  class="btn btn-primary">
                  Guardar cliente
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
