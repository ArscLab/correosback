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
        $db  = \Config\Database::connect();
        $query = $db->query("call deleteCustomer()");
        return $this->respond($query->getResult('array'));
    }

    public function updateCostumer()
    {
        $db  = \Config\Database::connect();
        $query = $db->query("call updateCustomer()");
        return $this->respond($query->getResult('array'));
    }

    public function insertCostumer()
    {
        $db  = \Config\Database::connect();
        //$query = $db->query("call createCustomer()");
        return $this->respond($this->request->getVar("name"));
        //echo $this->request;
        //return $this->respond($query->getResult('array'));
    }
}
