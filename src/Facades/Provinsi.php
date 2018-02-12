<?php namespace Bantenprov\Provinsi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Provinsi facade.
 *
 * @package Bantenprov\Provinsi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Provinsi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'provinsi';
    }
}
