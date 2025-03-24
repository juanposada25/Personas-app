<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Municipality</title>
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
        <h1>Add Municipality</h1>

        <form method="POST" action="{{route('municipios.store')}}">
            @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Code</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
    <div id="idHelp" class="form-text">Municipality code</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Municipality</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
    placeholder="commune name">
  </div>
  <label for="departament">Departament:</label>
<select class="form-select" id="departament" name="code" required>
    <option selected disabled value="">Choose one...</option>
    @foreach ($departamentos as $departamento)
        <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
    @endforeach
</select>
<div class="mt-3">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
</div>  
</form>
    </div>

    
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">&copy; 2025 MiSitio. Todos los derechos reservados.</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>