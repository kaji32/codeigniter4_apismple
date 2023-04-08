<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
// use CodeIgniter\API\ResponseTrait;

class Api extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        $response = [
            'status' => 200,
            'error' => null,
            'news' => "this is test",
        ];
        log_message("debug", "aaaa");

        // return "AAAAA";
        return $this->respond($response);
    }
}
