<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    public function getCustomer()
    {
        $query = $this->db->query("SELECT * FROM Tbl_customer");
        
        return $query->result();
    }
}

?>