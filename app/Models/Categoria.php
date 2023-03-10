<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id_categoria
 * @property $nombre_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    protected $primaryKey = 'id_categoria';
    /*static $rules = [
		'id_categoria' => 'required',
		'nombre_categoria' => 'required',
    ];*/
    static $rules = [
      'nombre_categoria' => 'required',
      ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_categoria','nombre_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'id_categoria', 'id_categoria');
    }
    

}
