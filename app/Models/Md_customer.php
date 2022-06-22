<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer extends Model
{   
    protected $tableName  = 'Tbl_customers';

    public function getCostumer()
    {
        $query = $this->db->query("call getCustomers()");
        
        return $query->getResult('array');
    }
}

?>