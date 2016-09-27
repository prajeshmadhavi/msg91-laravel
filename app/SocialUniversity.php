<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/08/16
 * Time: 2:25 PM
 */

namespace App;


use Illuminate\Foundation\Application;

class SocialUniversity extends Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'';
    }


}