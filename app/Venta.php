<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ventas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente', 'fecha', 'estadoVenta', 'total'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function usuario()
    {
        return $this->belongsTo('AgricolaGrain\Usuario', 'idCliente');
    }
    public function lineaventas()
    {
        return $this->hasMany('AgricolaGrain\Lineaventa');
    }
}
