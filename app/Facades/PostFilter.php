<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 18/07/16
 * Time: 9:10 AM
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class PostFilter extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'postFilter';
    }


}