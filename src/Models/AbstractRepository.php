<?php

namespace App\Models;

use App\Database\DB;
use PDO;

class AbstractRepository
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::instance();
    }
}