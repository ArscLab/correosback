<?php

namespace App\Models;

use CodeIgniter\Model;
$db      = \Config\Database::connect();
$builder = $db->table('Tbl_customers'); 
class Md_customer extends Model
{
    
    public function getCostumer()
    {
        $query = $this->db->query("call getCustomers()");
        
        return $query->getResult('array');
    }
}

?>