<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class Ctr_customers extends ResourceController
{

    protected $modelName = 'App\Models\Md_customer.php';

    protected $format = 'json';

    public function loadCostumer()
    {
        //echo $this->model->getCostumer();
        $db  = \Config\Database::connect();
        //$this->db->table('Tbl_customers');
        //$query = $db->table("Tbl_customers");
        $query = $db->query("call getCustomers()");
        
        $rest = $query->getResult('array');

        return $this->respond($rest);
    }

    public function deleteCostumer()
    {
        return view('welcome_message');
    }

    public function updateCostumer()
    {
        return view('welcome_message');
    }

    public function insertCostumer()
    {
        return view('welcome_message');
    }
}
