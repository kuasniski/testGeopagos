<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Api extends BaseController
{
    public function index()
    {
        $nombre = $this->request->getPost('nombre');
        $res = array('resultado'=>"Hola $nombre");
        return $this->response->setJSON($res);
    }
    public function createTournament(){
        $data = [
            'nombre' => $this->request->getPost('nombrer'),
            'integrantes' => $this->request->getPost('integrates')
        ];
        
    }
}
