<?php
namespace App\Models;

use CodeIgniter\Model;

class Category_model extends Model
{
    protected $table = 'category';
    protected $allowedFields = ['category_id', 'name', 'description', 'date', 'time'];

    public function getRow($id)
    {
        return $this->where('category_id', $id)->first();
    }


    public function allData()
    {
        return $this->findAll();
    }

}