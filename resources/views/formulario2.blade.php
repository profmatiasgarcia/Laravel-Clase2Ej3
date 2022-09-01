{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #a7d4ef;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">

                <div class="card">
                    <div class="card-header tex">
                        Formulario de ingreso a Encuesta
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('enviodatos') }}">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                        @if ($errors->has('nombre'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('nombre') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido">
                                        @if ($errors->has('apellido'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('apellido') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="institucion">Institucion Educativa</label>
                                        <input type="text" class="form-control" id="institucion" name="institucion">
                                        @if ($errors->has('institucion'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('institucion') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="carrera">Carrera</label>
                                        <input type="text" class="form-control" id="carrera" name="carrera">
                                        @if ($errors->has('carrera'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('carrera') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                @if ($errors->has('email'))
                                    <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nivel_acceso">Seleccione Cuenta:</label>
                                <select class="form-control" id="nivel_acceso" name="nivel_acceso">
                                    <option value="">Seleccione cuenta...</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="docente">Docente</option>
                                    <option value="estudiante">Estudiante</option>
                                    <option value="invitado">Invitado</option>
                                </select>
                                @if ($errors->has('nivel_acceso'))
                                    <small class="form-text text-danger">{{ $errors->first('nivel_acceso') }}</small>
                                @endif
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" value="m">
                                <label class="form-check-label">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" value="f">
                                <label class="form-check-label">Femenino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" value="o">
                                <label class="form-check-label">Otros</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" value="p">
                                <label class="form-check-label">Prefiero no decir</label>
                            </div>
                            @if ($errors->has('genero'))
                                <small class="form-text text-danger">{{ $errors->first('genero') }}</small>
                            @endif
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad">
                                @if ($errors->has('edad'))
                                    <small class="form-text text-danger">{{ $errors->first('edad') }}</small>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-info">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
