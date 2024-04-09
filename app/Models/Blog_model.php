<?php
namespace App\Models;

use CodeIgniter\Model;

class Blog_model extends Model
{
    protected $table = 'blog';
    protected $allowedFields = ['title', 'image', 'description', 'date', 'time', 'short_desc', 'category'];
    public function getRow($id)
    {
        return $this->where('id', $id)->first();
    }
}