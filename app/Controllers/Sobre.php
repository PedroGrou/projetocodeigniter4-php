<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Sobre extends BaseController
{
  public function index()
  {

    $data = [
      'title' => 'Sobre'
    ];


    echo view('backend/templates/html-header', $data);
    echo view('backend/templates/header');
    echo view('/sobre');
    echo view('backend/templates/footer');
    echo view('backend/templates/html-footer');
  }
}
