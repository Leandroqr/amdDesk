<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Sgimatrizincidente extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sgimatrizincidentes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['name','descripcion','categoria','c','i','d','seccion_id','grupo_id','responsablen1','responsablen2','evidencia','solucion'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $identifiableAttribute = ['name','descripcion','categoria','c','i','d','seccion_id','grupo_id','responsablen1','responsablen2','evidencia','solucion'];
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


    public function Seccion()
    {
        return $this->belongsTo(Seccion::class, 'seccion_id');
    }


    public function Grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }


    public function Responsablen1()
    {
        return $this->belongsTo(User::class, 'responsablen1');
    }

    public function Responsablen2()
    {
        return $this->belongsTo(User::class, 'responsablen2');
    }
    public function Responsable_n1()
    {
        return $this->hasMany(User::class, 'id');
    }
    public function Responsable_n2()
    {
        return $this->hasMany(User::class, 'id');
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
