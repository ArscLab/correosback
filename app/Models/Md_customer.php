<?php

namespace App\Models;

use CodeIgniter\Model;

class Md_customer extends Model
{
    
    public function getCostumer()
    {
        $query = $this->db->query("SELECT * FROM Tbl_customers");
        
        return $query;
    }
}

?>