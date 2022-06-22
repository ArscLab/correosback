<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer
{   
    //protected $table  = 'Tbl_customers';
    
    public function getCostumer()
    {
        $db  = \Config\Database::connect();
        //$this->db->table('Tbl_customers');
        $query = $db->query("call getCustomers()");
        
        return $query->getResult('array');
    }
}

?>