<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class ApiModel extends Model
{

    public function getAllClientes()
    {
        $db = db_connect(); // * Conectarse ala BD

        $query = $db->query('SELECT * FROM cliente where estado = 1'); // * Ejecuta la consulta

        return $query; // * Regresa al modelo el objeto $data[]
    }
}