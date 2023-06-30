@extends('layouts.master')

@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Sube tu foto/imagen/arte</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            
                            <th>Titulo ARTE</th>
                            <th>Firma</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadores as $num=>$jugador)
                        <tr>
                            
                            <td class="align-middle">{{$jugador->apellido}}</td>
                            <td class="align-middle">{{$jugador->nombre}}</td>
                            
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>

            <!-- form agregar equipo -->
            <div class="mb-10">
                <div class="card">
                    <div class="card-header bg-dark text-white">Subir ARTE</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('jugadores.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="apellido" class="form-label">TITULO ARTE</label>
                                <input type="text" id="apellido" name="apellido" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                <label for="equipo">Seleccione Artista</label>
                                <select name="equipo" id="equipo" class="form-control">
                                    @foreach ($equipos as $equipo)
                                        <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Archivo:</label>
                                <input type="file" id="imagen" name="imagen" class="form-control-file">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type ="reset" class="btn btn-primary">Cancelar</button>
                                <button type ="submit" class="btn btn-danger">Agregar FOTO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    
    