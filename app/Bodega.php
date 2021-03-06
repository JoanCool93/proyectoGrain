<?php

namespace AgricolaGrain;

use AgricolaGrain\Renta;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
   	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bodegas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'ancho', 'alto', 'profundidad',
     'construccion', 'costoMensual', 'costoAnual', 'capacidadTotal', 
     'capaciodadUsada', 'tipoAcceso', 'calle','numero', 'colonia', 'ciudad', 
     'estado', 'pais'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function especies()
    {
        return $this->belongsToMany('AgricolaGrain\Especie');
    }
    
    public function rentas()
    {
        return $this->hasMany('AgricolaGrain\Renta');
    }
}
