<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class Ctr_customers extends ResourceController
{

    protected $modelName = 'App\Models\Md_customer';

    protected $format = 'json';

    public function loadCostumer()
    {
        $db  = \Config\Database::connect();
        $query = $db->query("call getCustomers()");
        return $this->respond($query->getResult('array'));
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
