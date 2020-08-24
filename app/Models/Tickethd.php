<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Tickethd extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tickethds';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['id', 'user_id','modeloatencion_id', 'cliente_id', 'aplicacion_id', 'matrizop_id', 'sistema_id','descripcion', 'solucion', 'seccion_id', 'grupo_id', 'estado_id', 'completed_at', 'solicitante_nombre', 'solicitante_codigo', 'solicitante_cargo','solicitante_celular', 'solicitante_correo', 'solicitante_placa_zona', 'solicitante_doc_transporte', 'asignacion_n1', 'asignacion_n2', 'asignacion_n3', 'asignacion_n4', 'transferencia', 'observaciones', 'adjuntos'];
    // protected $hidden = [];
    protected $identifiableAttribute = ['user_id', 'modeloatencion_id', 'cliente_id', 'aplicacion_id', 'matrizop_id','sistema_id', 'descripcion', 'solucion', 'seccion_id', 'grupo_id', 'estado_id', 'completed_at', 'solicitante_nombre', 'solicitante_codigo', 'solicitante_cargo', 'solicitante_celular', 'solicitante_correo', 'solicitante_placa_zona', 'solicitante_doc_transporte', 'asignacion_n1', 'asignacion_n2', 'asignacion_n3', 'asignacion_n4', 'transferencia', 'observaciones', 'adjuntos'];
    // protected $dates = [];
    //const CERRADO = 3;
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    // public function Modeloatencion_id()
    // {
    //     return $this->hasMany(Modeloatencion::class, 'modeloatencion_id');
    // }

    // public function Cliente_id()
    // {
    //     return $this->hasmany(Cliente::class, 'cliente_id');
    // }

    // public function Aplicacion_id()
    // {
    //     return $this->hasmany(Aplicacion::class, 'aplicacion_id');
    // }

    // public function Matrizop_id()
    // {
    //     return $this->hasmany(Matrizop::class, 'matrizop_id');
    // }

    // public function Estado_id()
    // {
    //     return $this->hasmany(Estado::class, 'estado_id');
    // }

    // public function Seccion_id()
    // {
    //     return $this->hasmany(Seccion::class, 'seccion_id');
    // }

    // public function Grupo_id()
    // {
    //     return $this->hasmany(Grupo::class, 'grupo_id');
    // }

    // public function User_id()
    // {
    //     return $this->hasmany(User::class, 'user_id');
    // }

    // public function asignacion_n1()
    // {
    //     return $this->hasmany(User::class, 'asignacion_n1');
    // }

    // public function asignacion_n2()
    // {
    //     return $this->hasmany(User::class, 'asignacion_n2');
    // }

    // public function asignacion_n3()
    // {
    //     return $this->hasmany(User::class, 'asignacion_n3');
    // }

    // public function asignacion_n4()
    // {
    //     return $this->hasmany(User::class, 'asignacion_n4');
    // }

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function Modeloatencion()
    {
        return $this->belongsTo(Modeloatencion::class, 'modeloatencion_id');
    }

    public function Aplicaciones()
    {
        return $this->belongsTo(Aplicacion::class, 'aplicacion_id');
    }

    public function Matrizops()
    {
        return $this->belongsTo(Matrizop::class, 'matrizop_id');
    }

    public function Estados()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function Secciones()
    {
        return $this->belongsTo(Seccion::class, 'seccion_id');
    }

    public function Grupos()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    public function asignaciones_n1()
    {
        return $this->belongsTo(User::class, 'asignacion_n1');
    }

    public function asignaciones_n2()
    {
        return $this->belongsTo(User::class, 'asignacion_n2');
    }

    public function asignaciones_n3()
    {
        return $this->belongsTo(User::class, 'asignacion_n3');
    }

    public function asignaciones_n4()
    {
        return $this->belongsTo(User::class, 'asignacion_n4');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    // public function scopeCerrado(Builder $query)
    // {
    //     return $query->where('estado_id','=','3');
    // }
    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    // $response = $this->traitStore();
    //     \Alert::success('Tu has grabado con Éxito')->flash();
    //     \Alert::info($this->crud->getCurrentEntry()->getKey())->flash();
    //     return $response;
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = "adjuntos";
        $disk = "public";
        $destination_path = "folder_1/subfolder_1";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function setDatetimeAttribute($value)
    {
        $this->attributes['datetime'] = \Date::parse($value);
    }
}
