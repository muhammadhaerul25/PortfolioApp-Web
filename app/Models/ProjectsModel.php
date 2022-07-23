<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'slug', 'picture', 'content'];
}
