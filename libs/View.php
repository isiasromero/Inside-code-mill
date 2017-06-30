<?php

@session_start();
class View
{
    private $folder;

    public function show($nombre)
    {

        $path = ROOT . 'views/' .  $nombre;

        if (is_readable($path)) {
            include_once $path;
        } else {
            http_response_code(404);
            throw new \Exception('No existe la vista solicitada ' . $nombre);
            return false;
        }

    }

}
