<?php

    /**
         *  Luxury-php web Framework v.1.0.0
         *  @author : Amr Muhamed <amrmuhamed9@gmail.com>
    **/

    /**
    *---------------------------------------------------------------------
    *   Register Autoloader
    *---------------------------------------------------------------------
    *   load the autoloader that will generated class that will be used
    *
    **/

require __DIR__. "/../vendor/autoload.php";

    /**
    *---------------------------------------------------------------------
    *    Bootstrap Application
    *---------------------------------------------------------------------
    *    Bootstrap the application and  do action from framework*
    *
    **/

require __DIR__. "/../bootstrap/app.php";

    /**
     * ------------------------------------------------
     *      Run The Application
     * ------------------------------------------------
     *  Handel the request and send the responce
     *
     **/

$app = Application::run();
