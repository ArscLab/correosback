<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer extends Model
{
    
    public function getCostumer()
    {
        //$this->db = \Config\Database::connect();
        $this->builder = $this->db->table('Tbl_customers'); 
        $query = $this->db->query("call getCustomers()");
        
        return $query->getResult('array');
    }
}

?>