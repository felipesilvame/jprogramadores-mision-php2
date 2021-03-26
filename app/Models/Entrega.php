<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rut',
        'cod_producto',
        'cantidad',
        'fecha_entrega'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'fecha_entrega'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'cantidad' => 'integer'
    ];

    /**
     * The validation rules
     * @var array
     */
    public static $rules = [
        'rut' => 'required|exists:App\Models\Personal,rut',
        'cod_producto' => 'required|exists:App\Models\Producto,cod_producto',
        'cantidad' => 'required|numeric|min:1',
        'fecha_entrega' => 'required|date|date_format:Y-m-d'
    ];


    /**
     * The validation filters
     * 
     * @var array
     */
    public static $filters = [];

    /**
     * The model'd default values for attributes
     * 
     * @var array
     */
    protected $attributes = [];

    // RELATIONS

    /**
     * Entrega belongs to Personal
     * @return BelongsTo
     */
    public function personal(){
        return $this->belongsTo(\App\Models\Personal::class, 'rut', 'rut');
    }

    /**
     * Entrega belongs to Producto
     * @return BelongsTo
     */
    public function producto(){
        return $this->belongsTo(\App\Models\Producto::class, 'cod_producto', 'cod_producto');
    }
}
