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
    private $urlController = null;
    private $urlAction = null;
    private $urlParams = [];

    function __construct()
    {

        $db = Mysqldb::getInstance()->getDatabase();

        $url = $this->separarURL();

        // para ver la url array var_dump($url);

        //lo de abajo es para si no existe
        if ( ! $this->urlController ){
            require_once '../app/controllers/LoginController.php';
            $page = new LoginController();
            $page->index();
        }elseif (file_exists('../app/controllers/' . ucfirst($this->urlController) . 'Controller.php'))
        {
            $controller = ucfirst($this->urlController) . 'Controller';
            require_once '../app/controllers/' . $controller . '.php';
            $this->urlController = new $controller;
            $this->urlController->index();
        }

    }

    public function separarURL()
    {
        if ($_SERVER['REQUEST_URI'] != '/'){
            $url = trim($_SERVER['REQUEST_URI'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //lo de abajo separa las cosas y los mete en un array
            $url = explode('/', $url);

            //lo de abajo es para que sea null si te lo mandan vacio en vez de dar error
            $this->urlController = isset($url[0]) ?? null;
            $this->urlAction = isset($url[1]) ?? null;

            unset($url[0], $url[1]);

            $this->urlParams = array_values($url);

        }

    }
}