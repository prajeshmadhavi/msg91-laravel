<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 27/07/16
 * Time: 7:45 AM
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Stat extends Facade
{

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'stat';
    }


}