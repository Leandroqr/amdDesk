<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Sgiticketincidente extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sgiticketincidentes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'useract_id', 'lugar_id','incidente_at', 'estadoactual_id', 'tipo_id' ,'descripcion', 'impacto', 'descripcionimpacto', 'vulnerabilidad', 'descripcionvulnerabilidad', 'causante', 'nombrecausante', 'violacion', 'activo_id', 'matriz_id', 'evidencia', 'evidenciaurl', 'seccion_id', 'asignacionr1', 'procesos','usuarios', 'recursos','urgencia','prioridad', 'respuesta', 'inicio_at', 'fin_at', 'acciones', 'pendientes', 'estado_id', 'lecciones', 'responsablesolucion'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    // public function prioridad()
    // {

    //     if ((($this->procesos * .3 + $this->usuarios * .4 + $this->recursos * .3) * $this->urgencia) < 30) {
    //         return 1;
    //     } elseif ((($this->procesos * .3 + $this->usuarios * .4 + $this->recursos * .3) * $this->urgencia) < 60) {
    //         return 2;
    //     } elseif ((($this->procesos * .3 + $this->usuarios * .4 + $this->recursos * .3) * $this->urgencia) >= 60) {
    //         return 3;
    //     }
    // }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    // public function User_id()
    // {
    //     return $this->hasmany(User::class, 'user_id');
    // }

    // public function Lugar_id()
    // {
    //     return $this->hasmany(Sgilugarincidente::class, 'lugar_id');
    // }

    // public function User_id()
    // {
    //     return $this->hasMany(User::class, 'user_id');
    // }
    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Usersact()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Userrespn1()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Userrespn2()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Lugares()
    {
        return $this->belongsTo(Sgilugarincidente::class, 'lugar_id');
    }

    public function Estadoactual()
    {
        return $this->belongsTo(Sgiestadoactualincidente::class, 'estadoactual_id');
    }

    public function Tipo()
    {
        return $this->belongsTo(Sgitipoincidente::class, 'tipo_id');
    }

    public function Activo()
    {
        return $this->belongsTo(Sgiactivoincidente::class, 'activo_id');
    }

    public function Matriz()
    {
        return $this->belongsTo(Sgimatrizincidente::class, 'matriz_id');
    }

    public function Seccion()
    {
        return $this->belongsTo(Sgimatrizincidente::class, 'seccion_id');
    }

    // public function Prioridad()
    // {
    //     return $this->belongsTo(Sgiprioridadincidente::class, 'prioridad_id');
    // }

    public function Estado()
    {
        return $this->belongsTo(Sgiestadoincidente::class, 'estado_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
