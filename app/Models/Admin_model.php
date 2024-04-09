<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['name', 'username', 'password', 'position'];
    public function getRow($id)
    {
        return $this->where('id', $id)->first();
    }
}