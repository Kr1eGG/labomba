<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>OnlyArts</title>
</head>

<body>
    
    <!-- barra usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-8">
                Hola Hola <span class="fw-bold">{{Auth::user()->nombre}}</span>
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                Fecha de hoy {{date('d-m-Y',strtotime(Auth::user()->ultimo_login))}} HORA: {{date('H:i:s',strtotime(Auth::user()->ultimo_login))}}
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <a href="{{route('usuarios.logout')}}" class="text-white">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">OnlyARTS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" aria-current="page" href="{{route('home.index')}}">sOLICITUDES</a>
                        </li>
                        @if (Gate::allows('usuarios-listar'))
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='equipos.index') active @endif" href="{{route('equipos.index')}}">Artistas</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='jugadores.index') active @endif" href="{{route('jugadores.index')}}">Arte</a>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                               PINCHA AQUI
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-primary">
                                </li>
                                <li><a class="dropdown-item" href="https://www.instagram.com/hago_memes_disociao/">PARA MAS MEMES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="{{route('usuarios.logout')}}">Cerrar Sesión</a>
                        </li>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- datos -->

    @yield('contenido-principal')
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>