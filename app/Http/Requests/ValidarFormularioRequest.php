<?php
/*Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/ -*/
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Providers\SoloLetrasServiceProvider;

class ValidarFormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'        => 'required|min:2|max:30',
            'apellido'      => 'required|min:2|max:30',
            'institucion'   => 'required|min:2|max:150',
            'carrera'       => 'required|min:2|max:100',
            'email'         => 'required|email',
            'nivel_acceso'  => 'required',
            'genero'          => 'required',
            'edad'          => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required'       => 'El :attribute es obligatorio.',
            'nombre.min'            => 'El :attribute debe contener mas de una letra.',
            'nombre.max'            => 'El :attribute debe contener max 30 letras.',

            'apellido.required'       => 'El :attribute es obligatorio.',
            'apellido.min'            => 'El :attribute debe contener mas de una letra.',
            'apellido.max'            => 'El :attribute debe contener max 30 letras.',

            'institucion.required'       => 'La :attribute es obligatorio.',
            'institucion.min'            => 'La :attribute debe contener mas de una letra.',
            'institucion.max'            => 'La :attribute debe contener max 150 letras.',

            'carrera.required'   => 'El :attribute es obligatorio.',
            'carrera.min'        => 'El :attribute debe contener mas de una caracter.',
            'carrera.max'        => 'El :attribute debe contener max 100 letras.',

            'email.required'    => 'El :attribute es obligatorio.',
            'email.email'       => 'El :attribute debe ser un correo válido.',

            'nivel_acceso.required'   => 'Debe seleccionar un :attribute .',
            'genero.required'         => 'Debes seleccionar tu :attribute .',

            'edad.required'     => 'La :attribute es obligatoria.',
            'edad.integer'      => 'El :attribute debe ser entero.',


        ];
    }
    public function attributes()
    {
        return [
            'nombre'        => 'nombre de usuario',
            'apellido'      => 'apellido',
            'institucion'   => 'institución',
            'carrera'       => 'carrera',
            'email'         => 'correo electronico',
            'nivel_acceso'  => 'nivel de acceso',
            'genero'        => 'genero',
            'edad'          => 'edad',
        ];
    }
}
