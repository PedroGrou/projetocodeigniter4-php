<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CatModel;
use App\Models\PubModel;


class Publicacoes extends BaseController
{
    public function index()
    {

        $model = new PubModel();
        $model2 = new CatModel();


        $data = [
            'title' => 'Publicações',
            'publicacoes' => $model->paginate(10),
            'categorias' => $model2->getCat(),
            'pager' => $model->pager,
            'msg'   => ''
        ];

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/publicacoes');
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
        echo view('backend/pages/publicacao');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }

    public function editar($id = null)
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
        echo view('backend/pages/publicacoes_editar');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }

    public function add()
    {

        $model = new PubModel();
        $model2 = new CatModel();

        $data = [
            'title' => 'Editar Publicações',
            'publicacoes' => $model->getPub(),
            'categorias' => $model2->getCat(),
            'msg'   => ''
        ];


        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/publicacoes_add');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }

    public function gravar()
    {

        helper('form');

        $model = new PubModel();
        $model2 = new CatModel();

        if ($this->validate([
            'titulo'    => ['label' => 'Titulo', 'rules' => 'required|min_length[3]'],
            'categoria' => ['label' => 'Categoria', 'rules' => 'required'],
            'indexbase' => ['label' => 'IndexBase', 'rules' => 'required|min_length[3]'],
            'numautor'  => ['label' => 'NumAutor', 'rules' => 'required'],
            'autores'   => ['label' => 'Autores', 'rules' => 'required|min_length[3]'],
            'revistas'  => ['label' => 'Revistas', 'rules' => 'required|min_length[3]'],
            'conteudo'  => ['label' => 'Conteudo', 'rules' => 'required|min_length[3]'],
            'volume'    => ['label' => 'Volume', 'rules' => 'required'],
            'numero'    => ['label' => 'Numero', 'rules' => 'required'],
            'paginas'   => ['label' => 'Paginas', 'rules' => 'required'],
            'ano'       => ['label' => 'Ano', 'rules' => 'required|min_length[3]'],

        ])) {

            $id = $this->request->getVar('id');
            $titulo = $this->request->getVar('titulo');
            $categoria = $this->request->getVar('categoria');
            $indexbase = $this->request->getVar('indexbase');
            $numautor = $this->request->getVar('numautor');
            $autores = $this->request->getVar('autores');
            $revistas = $this->request->getVar('revistas');
            $conteudo = $this->request->getVar('conteudo');
            $volume = $this->request->getVar('volume');
            $numero = $this->request->getVar('numero');
            $paginas = $this->request->getVar('paginas');
            $ano = $this->request->getVar('ano');
            $img = $this->request->getFile('img');

            if (!$img->isValid()) {
                $model->save([
                    'id'          => $id,
                    'titulo'      => $titulo,
                    'categoria'   => $categoria,
                    'indexbase'   => $indexbase,
                    'numautor'    => $numautor,
                    'autores'     => $autores,
                    'revistas'    => $revistas,
                    'conteudo'    => $conteudo,
                    'volume'      => $volume,
                    'numero'      => $numero,
                    'paginas'     => $paginas,
                    'ano'         => $ano,

                ]);

                $data = [
                    'title' => 'Publicações',
                    'publicacoes' => $model->paginate(10),
                    'categorias' => $model2->getCat(),
                    'pager' => $model->pager,
                    'msg'   => 'Publicação Adicionada'
                ];

                echo view('backend/templates/html-header', $data);
                echo view('backend/templates/header');
                echo view('backend/pages/publicacoes');
                echo view('backend/templates/footer');
                echo view('backend/templates/html-footer');
            } else {
                $validIMG = $this->validate([
                    'img' => [
                        'uploaded[img]',
                        'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
                        'max_size[img,4096]',
                    ]
                ]);

                if ($validIMG) {
                    $newName = $img->getRandomName();
                    $img->move('img/publicacoes', $newName);

                    $model->save([
                        'id'          => $id,
                        'titulo'      => $titulo,
                        'categoria'   => $categoria,
                        'indexbase'   => $indexbase,
                        'numautor'    => $numautor,
                        'autores'     => $autores,
                        'revistas'    => $revistas,
                        'conteudo'    => $conteudo,
                        'volume'      => $volume,
                        'numero'      => $numero,
                        'paginas'     => $paginas,
                        'ano'         => $ano,
                        'img'         => $newName,
                    ]);

                    $data = [
                        'title' => 'Publicações',
                        'publicacoes' => $model->paginate(10),
                        'categorias' => $model2->getCat(),
                        'pager' => $model->pager,
                        'msg'   => 'Publicação Adicionada'
                    ];

                    echo view('backend/templates/html-header', $data);
                    echo view('backend/templates/header');
                    echo view('backend/pages/publicacoes');
                    echo view('backend/templates/footer');
                    echo view('backend/templates/html-footer');
                }
            }
        } else {
            $data = [
                'title' => 'Publicações',
                'categorias' => $model->paginate(10),
                'pager' => $model->pager,
                'msg'   => 'Erro ao Adicionar a Publicação!'
            ];

            echo view('backend/templates/html-header', $data);
            echo view('backend/templates/header');
            echo view('backend/pages/publicacoes');
            echo view('backend/templates/footer');
            echo view('backend/templates/html-footer');
        }
    }


    public function apagar($id = null)
    {

        $model = new PubModel();

        $model->delete($id);

        return redirect()->to(base_url('admin/publicacoes'));
    }
}
