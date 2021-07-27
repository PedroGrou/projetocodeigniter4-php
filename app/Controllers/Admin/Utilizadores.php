<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Utilizadores extends BaseController
{
    public function index()
    {

        $model = new UserModel();

        $data = [
            'title' => 'Utilizadores',
            'utilizadores' => $model->paginate(10),
            'pager' => $model->pager,
            'msg'   => ''
        ];

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/utilizadores');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }


    public function add()
    {

        $model = new UserModel();


        $data = [
            'title' => 'Editar Publicações',
            'utilizadores' => $model->getUserId(),
            'msg'   => ''
        ];


        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/utilizadores_add');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }


    public function gravar()
    {

        helper('form');
        $model = new UserModel();

        if ($this->validate([
            'user' => ['label' => 'Utilizadores', 'rules' => 'required|min_length[3]|is_unique[utilizadores.user]'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[3]'],
            'nome' => ['label' => 'Nome', 'rules' => 'required|min_length[3]'],
            'idade' => ['label' => 'Idade', 'rules' => 'max_length[3]'],
            'cidade' => ['label' => 'Cidade', 'rules' => 'min_length[3]'],
            'categoria' => ['label' => 'Cat', 'rules' => 'min_length[3]'],
            'contacto' => ['label' => 'Contacto', 'rules' => 'min_length[3]'],
            'entidade' => ['label' => 'Entidade', 'rules' => 'min_length[3]'],
            'sobre' => ['label' => 'Sobre', 'rules' => 'min_length[3]']

        ])) {

            $user = $this->request->getVar('user');
            $password = $this->request->getVar('password');
            $nome = $this->request->getVar('nome');
            $idade = $this->request->getVar('idade');
            $cidade = $this->request->getVar('cidade');
            $categoria = $this->request->getVar('categoria');
            $contacto = $this->request->getVar('contacto');
            $email = $this->request->getVar('email');
            $entidade = $this->request->getVar('entidade');
            $sobre = $this->request->getVar('sobre');
            $passwordCripto = md5($password);
            $img = $this->request->getFile('img');
            $facebook = $this->request->getVar('facebook');
            $twitter = $this->request->getVar('twitter');
            $insta = $this->request->getVar('insta');
            $youtube = $this->request->getVar('youtube');

            if (!$img->isValid()) {
                $model->save([
                    'user'      => $user,
                    'password'  => $passwordCripto,
                    'nome'      => $nome,
                    'idade'     => $idade,
                    'cidade'    => $cidade,
                    'categoria' => $categoria,
                    'contacto'  => $contacto,
                    'entidade'  => $entidade,
                    'sobre'     => $sobre,
                    'facebook'  => $facebook,
                    'twitter'   => $twitter,
                    'insta'     => $insta,
                    'youtube'   => $youtube,
                    'email'     => $email

                ]);

                $data = [
                    'title' => 'Utlizadores',
                    'utilizadores' => $model->paginate(10),
                    'pager' => $model->pager,
                    'msg'   => 'Utilizador Registado!'
                ];

                echo view('backend/templates/html-header', $data);
                echo view('backend/templates/header');
                echo view('backend/pages/utilizadores', $data);
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
                    $img->move('img/utilizadores', $newName);

                    $model->save([
                        'user'      => $user,
                        'password'  => $passwordCripto,
                        'nome'      => $nome,
                        'idade'     => $idade,
                        'cidade'    => $cidade,
                        'categoria' => $categoria,
                        'contacto'  => $contacto,
                        'entidade'  => $entidade,
                        'sobre'     => $sobre,
                        'facebook'  => $facebook,
                        'twitter'   => $twitter,
                        'insta'     => $insta,
                        'youtube'   => $youtube,
                        'email'     => $email,
                        'img'       => $newName,

                    ]);

                    $data = [
                        'title' => 'Utlizadores',
                        'utilizadores' => $model->paginate(10),
                        'pager' => $model->pager,
                        'msg'   => 'Utilizador Registado!'
                    ];

                    echo view('backend/templates/html-header', $data);
                    echo view('backend/templates/header');
                    echo view('backend/pages/utilizadores');
                    echo view('backend/templates/footer');
                    echo view('backend/templates/html-footer');
                }
            }
        } else {
            $data = [
                'title' => 'Utilizadores',
                'utilizadores' => $model->paginate(10),
                'pager' => $model->pager,
                'msg'   => 'Erro ao Registar o Utilizador!'
            ];

            echo view('backend/templates/html-header', $data);
            echo view('backend/templates/header');
            echo view('backend/pages/utilizadores', $data);
            echo view('backend/templates/footer');
            echo view('backend/templates/html-footer');
        }
    }





    public function editarUtil()
    {

        helper('form');
        $model = new UserModel();
        $id = $this->request->getVar('id');
        $nome = $this->request->getVar('nome');
        $idade = $this->request->getVar('idade');
        $cidade = $this->request->getVar('cidade');
        $categoria = $this->request->getVar('categoria');
        $contacto = $this->request->getVar('contacto');
        $email = $this->request->getVar('email');
        $entidade = $this->request->getVar('entidade');
        $sobre = $this->request->getVar('sobre');
        $facebook = $this->request->getVar('facebook');
        $twitter = $this->request->getVar('twitter');
        $insta = $this->request->getVar('insta');
        $youtube = $this->request->getVar('youtube');

        $img = $this->request->getFile('img');


        if (!$img->isValid()) {

            $data = [
                'nome'      => $nome,
                'idade'     => $idade,
                'cidade'    => $cidade,
                'categoria' => $categoria,
                'contacto'  => $contacto,
                'entidade'  => $entidade,
                'sobre'     => $sobre,
                'facebook'  => $facebook,
                'twitter'   => $twitter,
                'insta'     => $insta,
                'youtube'   => $youtube,
                'email'     => $email
            ];

            $model->update($id, $data);

            return redirect()->to(base_url('admin/utilizadores'));
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
                $img->move('img/utilizadores', $newName);

                $data = [
                    'nome'      => $nome,
                    'idade'     => $idade,
                    'cidade'    => $cidade,
                    'categoria' => $categoria,
                    'contacto'  => $contacto,
                    'entidade'  => $entidade,
                    'sobre'     => $sobre,
                    'facebook'  => $facebook,
                    'twitter'   => $twitter,
                    'insta'     => $insta,
                    'youtube'   => $youtube,
                    'email'     => $email,
                    'img'       => $newName,
                ];

                $model->update($id, $data);
                return redirect()->to(base_url('admin/utilizadores'));
            }
        }

        $data = [
            'title' => 'Utilizadores',
            'utilizadores' => $model->paginate(10),
            'pager' => $model->pager,
            'msg'   => 'Erro ao Editar o Utilizador!'
        ];

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/utilizadores', $data);
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }


    public function apagar($id = null)
    {

        $model = new UserModel();

        $model->delete($id);

        return redirect()->to(base_url('admin/utilizadores'));
    }


    public function editar($id = null)
    {

        $model = new UserModel();

        $data = [
            'title' => 'Editar Utilizadores',
            'utilizadores' => $model->getUserId($id),
            'msg'   => ''
        ];


        if (empty($data['utilizadores'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possivel encontrar a publicação com o id: ' . $id);
        }

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/utilizadores_editar');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }


    public function mudarPass()
    {
        $model = new UserModel();
        $id = $this->request->getVar('id');

        $data = [
            'password'  => md5($this->request->getVar('password')),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('admin/utilizadores'));
    }



    public function utilizador($id = null)
    {

        $model = new UserModel();


        $data = [
            'title' => 'Editar Publicações',
            'utilizadores' => $model->getUserId($id),
            'msg'   => ''
        ];


        if (empty($data['utilizadores'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possivel encontrar a publicação com o id: ' . $id);
        }

        echo view('backend/templates/html-header', $data);
        echo view('backend/templates/header');
        echo view('backend/pages/utilizador');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }
}
