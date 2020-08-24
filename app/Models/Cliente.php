<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;



class Cliente extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'nit_id', 'nit', 'dv', 'nombre1', 'nombre2', 'apellido1', 'apellido2','name', 'razon_social', 'pais_id', 'departamento_id', 'ciudad_id', 'direccion', 'telefono1', 'telefono2', 'capacitacion', 'email_cliente', 'agencia_id', 'tipocl_id', 'base_id', 'clave_id','base_nombre', 'servidor_nombre', 'servidor_ip', 'webgestion_url', 'version_nombre', 'erp_nombre', 'prov_datos','preventa', 'autoventa', 'distribucion', 'supervisor', 'apedir', 'erp', 'salud', 'ramo', 'felam', 'fac_electronica', 'cert_felam', 'cert_felam_i', 'cert_felam_f', 'contrato_felam', 'contribuyente_id', 'contrato_app', 'contrato_numero', 'contrato_imagen', 'nombre_contacto1', 'telefono_contacto1', 'cargo_contacto1', 'email_contacto1', 'nombre_contacto2', 'telefono_contacto2', 'cargo_contacto2', 'email_contacto2', 'nombre_contacto3', 'telefono_contacto3', 'cargo_contacto3', 'email_contacto3', 'nombre_contacto4', 'telefono_contacto4', 'cargo_contacto4', 'email_contacto4', 'nombre_contacto5', 'telefono_contacto5', 'cargo_contacto5', 'email_contacto5','activo', 'observacion'];
    // protected $hidden = [];
    protected $identifiableAttribute = ['user_id', 'nit_id', 'nit', 'dv', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'name', 'razon_social', 'pais_id', 'departamento_id', 'ciudad_id', 'direccion', 'telefono1', 'telefono2', 'capacitacion', 'email_cliente', 'agencia_id', 'tipocl_id', 'base_id', 'clave_id', 'base_nombre', 'servidor_nombre', 'servidor_ip', 'webgestion_url', 'version_nombre', 'erp_nombre', 'prov_datos', 'preventa', 'autoventa', 'distribucion', 'supervisor', 'apedir', 'erp', 'salud', 'ramo', 'felam', 'fac_electronica', 'cert_felam', 'cert_felam_i', 'cert_felam_f', 'contrato_felam', 'contribuyente_id', 'contrato_app', 'contrato_numero', 'contrato_imagen', 'nombre_contacto1', 'telefono_contacto1', 'cargo_contacto1', 'email_contacto1', 'nombre_contacto2', 'telefono_contacto2', 'cargo_contacto2', 'email_contacto2', 'nombre_contacto3', 'telefono_contacto3', 'cargo_contacto3', 'email_contacto3', 'nombre_contacto4', 'telefono_contacto4', 'cargo_contacto4', 'email_contacto4', 'nombre_contacto5', 'telefono_contacto5', 'cargo_contacto5', 'email_contacto5', 'activo', 'observacion'];
    // protected $dates = [];

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


    public function ciudad_id()
    {
        return $this->hasmany(Ciudad::class, 'ciudad_id');
    }

    public function departamento_id()
    {
        return $this->hasMany(Departamento::class, 'departamento_id');
    }

    public function pais_id()
    {
        return $this->hasMany(Pais::class, 'pais_id');
    }

    public function tipocl_id()
    {
        return $this->hasMany(Tipocl::class, 'tipocl_id');
    }

    public function user_id()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function ciudades()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function paises()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function tipocls()
    {
        return $this->belongsTo(Tipocl::class, 'tipocl_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
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
