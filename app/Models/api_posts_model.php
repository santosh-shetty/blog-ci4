<?php
namespace App\Models;

use CodeIgniter\Model;

class api_posts_model extends Model
{
    protected $table = 'api_posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'body', 'photo', 'category_id'];

    function insertData($data)
    {
        return $this->insert($data);

    }
    function allData()
    {
        return $this->findAll();
    }
    function insertWhere($id, $data)
    {
        $this->where('id', $id);
        return $this->insert($data);

    }

    function deletAll()
    {
        // Load the Query Builder library
        $builder = $this->db->table('api_posts');

        // Truncate the table
        return $builder->truncate();
    }

    public function getRow($id)
    {
        return $this->where('category_id', $id)->first();
    }
}