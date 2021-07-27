<?php

namespace App\Models;

use CodeIgniter\Model;

class PubModel extends Model
{


    protected $table = 'publicacoes';
    protected $allowedFields = ['titulo', 'categoria', 'indexbase', 'numautor', 'autores', 'revistas', 'conteudo', 'volume', 'numero', 'paginas', 'ano', 'img'];
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updateField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function getPub($id = false)
    {

        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->asArray()
                ->where(['id' => $id])
                ->first();
        }
    }
}
