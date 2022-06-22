<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer extends Model
{   
    //protected $table  = 'Tbl_customers';

    public function getCostumer()
    {
        //$this->db->table('Tbl_customers');
        $query = $this->db->query("call getCustomers()");
        
        return $query->getResult('array');
    }
}

?>