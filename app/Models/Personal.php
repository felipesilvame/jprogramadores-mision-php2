<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'cargo',
        'password',
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
    protected $dates = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The validation rules
     * @var array
     */
    public static $rules = [
        'rut' => 'required|unique:App\Models\Personal,rut',
        'nombre' => 'required',
        'apellido' => 'nullable',
        'cargo' => 'required',
        'password' => 'required',
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
     * Personal has many Entrega
     * @return HasMany
     */
    public function entregas(){
        return $this->hasMany(\App\Models\Entrega::class, 'rut', 'rut');
    }
}
