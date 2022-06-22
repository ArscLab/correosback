<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer extends Model
{   

    public function getCostumer()
    {
        //$query = $this->db->query("call getCustomers()");
        
        //return $query->getResult('array');


        $builder = $this->db->table('Tbl_customers');
        $query   = $builder->get();
    }
}

?>