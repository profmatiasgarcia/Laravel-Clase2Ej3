{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario de Ejemplo
        </title>
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
        </link>
    </head>
    <body>
        <form method="POST" action="{{ route('formulario') }}" oninput="range_control_value.value = range_control.valueAsNumber" >
            {{-- @csrf --}}
            {{ csrf_field() }}
            <p>
                Nombre:
                <input type="text" name="nombre" autofocus="" required=""/>
                <br/>
                Correo Electrónico:
                <input type="email" name="email" required=""/>
                <br/>
                URL:
                <input type="url" name="url" placeholder="Escribe la URL de tu página web personal"/>
                <br/>
                Fecha:
                <input type="date" name="fecha"/>
                <br/>
                Tiempo:
                <input type="time" name="horario"/>
                <br/>
                Fecha y hora de nacimiento:
                <input type="datetime" name="fechayhora"/>
                <br/>
                Mes:
                <input type="month" name="mes"/>
                <br/>
                Semana:
                <input type="week" name="semana"/>
                <br/>
                Número (min -10, max 10):
                <input type="number" name="numero" max="10" min="-10" value="0"/>
                <br/>
                Intervalo (min 0, max 10):
                <input type="range" name="rango" max="10" min="0" value="0"/>
                <output for="range_control" name="range_control_value">
                    0
                </output>
                <br/>
                Teléfono:
                <input type="tel" name="telefono"/>
                <br/>
                Término de búsqueda:
                <input type="search" name="buscarpor"/>
                <br/>
                Color Favorito:
                <input type="color" name="color"/>
                <br/>
                <br/>
                <br/>
                <br/>
                <input type="submit" value="Enviar!"/>
            </p>
        </form>
    </body>
</html>