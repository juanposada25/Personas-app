<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Municipios</title>
  </head>
  <body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MiSitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/comunas">Comunas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/departamentos">Departamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/municipios">Municipios</a></li>
                    <li class="nav-item"><a class="nav-link" href="/paises">Paises</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Municipality List</h1>

        <a href="{{ route('municipios.create') }}" class="btn btn-success">Add</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Municipality</th>
      <th scope="col">Departament</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($municipios as $municipio)
            <tr>
              <th scope="row">{{ $municipio->muni_codi }}</th>
              <td>{{$municipio->muni_nomb}}</td>
              <td>{{$municipio->depa_nomb}}</td>
                <td>
                <a href="{{ route('municipios.edit', ['municipio' => $municipio->muni_codi]) }}"
                class="btn btn-info">Edit</a>
                <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}" 
                      method="POST" style="display: inline-block">
                      @method('delete')
                      @csrf
                 <input class="btn btn-danger" type="submit" value="Delete">
              </form>
                </td>
            </tr>
            
    @endforeach

    <!--footer-->
  </tbody>
</table>
    </div>

    
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">&copy; 2025 MiSitio. Todos los derechos reservados.</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>