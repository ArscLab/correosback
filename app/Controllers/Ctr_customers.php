<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class Ctr_customers extends ResourceController
{

    protected $Mdcostumer = 'App\Models\Md_customer.php';

    protected $format = 'json';

    public function loadCostumer()
    {
        return $this->respond($this->model->getCustomer());
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
