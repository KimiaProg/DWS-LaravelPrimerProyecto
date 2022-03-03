<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 70px">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Biblioteca del pueblo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/libros">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/libros/solicitar">Solicitar Libro</a>
              </li>

              @auth
              <li class="nav-item">
                <a class="nav-link" href="/libros/create">Añade un libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/editorial">Editoriales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/editorial/create">añade un editorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/libros/listarPeticiones">Peticiones</a>
              </li>
              
              @endauth

              @guest
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              @endguest

              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    @yield('content')

    <div class="bg-dark row text-light text-center py-4" id="footer" style="margin-top: 500px">
        <div class="col-4"><h1>biblioteca</h1><br><i>Copyright Kimia Ehsani Dolati 2022</i></div>
        <div class="col">
          Product<br>
        
              Features<br>
              Security<br>
              Team<br>
              Enterprise<br>
              Customer stories<br>
              The ReadME Project<br>
              Pricing<br>
              Resources<br>
              Roadmap<br>
        
          </div>
        <div class="col">
          Platform<br>
        
              Developer API<br>
              Partners<br>
              Atom<br>
              Electron<br>
              GitHub Desktop<br>
        
          </div>
        <div class="col">
          Support<br>
        
              Docs<br>
              Community Forum<br>
              Professional Services<br>
              Learning Lab<br>
              Status<br>
              Contact GitHub<br>
        
          </div>
        <div class="col">
          Company<br>
        
              About<br>
              Blog<br>
              Careers<br>
              Press<br>
              Inclusion<br>
              Social Impact<br>
              Shop<br>
        
          </div>
        
        </div>
</body>
</html>