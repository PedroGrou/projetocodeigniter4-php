<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CatModel;
use App\Models\PubModel;


class Home extends BaseController
{
    public function index()
    {

        $model = new PubModel();
        $model2 = new CatModel();


        $data = [
            'title' => 'Home',
            'publicacoes' => $model->paginate(10),
            'categorias' => $model2->getCat(),
            'pager' => $model->pager,
            'msg'   => ''
        ];


        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('/home');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }


    public function publicacao($id = null)
    {

        $model = new PubModel();
        $model2 = new CatModel();

        $data = [
            'title' => 'Editar Publicações',
            'publicacoes' => $model->getPub($id),
            'categorias' => $model2->getCat(),
            'msg'   => ''
        ];


        if (empty($data['publicacoes'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possivel encontrar a publicação com o id: ' . $id);
        }

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('publicacao');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }
}
