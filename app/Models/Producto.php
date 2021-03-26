<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_producto',
        'descripcion',
        'stock',
        'proveedor',
        'fecha_ingreso',
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
        'fecha_ingreso'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'stock' => 'integer'
    ];

    /**
     * The validation rules
     * @var array
     */
    public static $rules = [
        'cod_producto' => 'required|unique:App\Models\Producto,cod_producto',
        'descripcion' => 'nullable',
        'stock' => 'required|numeric|min:0',
        'proveedor' => 'required',
        'fecha_ingreso' => 'required|date|date_format:Y-m-d',
    ];


    /**
     * The validation filters
     * 
     * @var array
     */
    public static $filters = [
        'cod_producto' => 'trim|escape|uppercase',
        'descripcion' => 'trim|escape|uppercase',
        'stock' => 'cast:integer',
        'proveedor' => 'trim|escape|uppercase',
        'fecha_ingreso' => ''
    ];

    /**
     * The model'd default values for attributes
     * 
     * @var array
     */
    protected $attributes = [];


    // RELATIONS

    /**
     * Producto has Many Entregas
     * @return HasMany
     */
    public function entregas(){
        return $this->hasMany(\App\Models\Entrega::class, 'cod_producto', 'cod_producto');
    }
}
