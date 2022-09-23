<?php

/** 
 * La clase Application maneja la URL y lanza los procesos
 * 
*/

/**
 * La clase Application maneja la URL y lanza los procesos
 */

class Application
{
    function __construct()
    {
        print ('funciona¿');
        $db = Mysqldb::getInstance()->getDatabase();

        $url = $this->separarURL();

        var_dump($url);

    }

    public function separarURL()
    {
        if ($_SERVER['REQUEST_URI'] != '/'){

        }

    }
}