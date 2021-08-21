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

    <div class="card-header tex">
        <h1> Ingreso a la Encuesta</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Institución</th>
                <th scope="col">Carrera</th>
                <th scope="col">Email</th>
                <th scope="col">Accedio como</th>
                <th scope="col">Genero</th>
                <th scope="col">Edad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $request->nombre }}</th>
                <td>{{ $request->apellido }}</td>
                <td>{{ $request->institucion }}</td>
                <td>{{ $request->carrera }}</td>
                <td>{{ $request->email }}</td>
                <td>{{ $request->nivel_acceso }}</td>
                <td>{{ $request->genero }}</td>
                <td>{{ $request->edad }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
