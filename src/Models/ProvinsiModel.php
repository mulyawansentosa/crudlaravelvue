<?php namespace Bantenprov\Provinsi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ProvinsiModel class.
 *
 * @package Bantenprov\Provinsi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProvinsiModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'provinsi';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
