<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <title>ONLYARTS</title>

</head>

<body style="background: blue">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">
                    <div
                        class="col-lg-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="bg-black p-2 mb-3 rounded">
                            <img src= "https://pymstatic.com/101466/conversions/frases-arte-social.jpg" style="width: 20rem;">
                        </div>
                        <h1 class="text-light"> ONLYARTS</h1>
                    
                    </div>
                    
                    <div class="col-lg-8 text-center bg-white">
                        <h2>Bienvenido a ONLY ARTS</h2   >
                        <b>TE PAGAMOS HASTA POR LOS MEMES</b>
                        <h5>SOLO USUARIOS REGISTRADOS</h5>
                        <div class="card">
                            <div class="card-body" style="background: yellowgreen">
                                <form method="POST"  action="{{route('usuarios.login')}}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Pass</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-success">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-warning mt-2">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>