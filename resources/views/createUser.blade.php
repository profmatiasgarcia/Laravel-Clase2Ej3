{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/ - --}}

<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Usuario</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Usuario</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
        <form method="POST" action="{{ url('user/create') }}">
            {{ csrf_field() }}
            <div class="form-group">
             <label>Nombre:</label>
             <input type="text" name="name" class="form-control" placeholder="Name">
             @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
         </div>
         <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
         <strong>Email:</strong>
         <input type="text" name="email" class="form-control" placeholder="Email">
         @if ($errors->has('email'))
         <span class="text-danger">{{ $errors->first('email') }}</span>
         @endif
     </div>
     <div class="form-group">
        <button class="btn btn-success btn-submit">Aceptar</button>
    </div>
</form>
</div>
</body>
</html>