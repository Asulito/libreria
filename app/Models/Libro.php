<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id_libro
 * @property $id_categoria
 * @property $nombre_libro
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    protected $primaryKey = 'id_libro';
    
    /*static $rules = [
		'id_libro' => 'required',
		'id_categoria' => 'required',
		'nombre_libro' => 'required',
    ];*/
    static $rules = [
      'id_categoria' => 'required',
      'nombre_libro' => 'required',
      ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    #protected $fillable = ['id_libro','id_categoria','nombre_libro'];
    protected $fillable = ['id_categoria','nombre_libro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id_categoria', 'id_categoria');
    }
    

}
