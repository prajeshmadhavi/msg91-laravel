<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 17/07/16
 * Time: 8:19 PM
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Tagger extends Facade
{

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tagger';
    }


}