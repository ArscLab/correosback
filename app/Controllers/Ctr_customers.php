<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{

    protected $Mdcostumer = 'App\Models\Md_customer';

    public function loadCostumer()
    {
        return $this->respond($Mdcustomer->getCustomer());
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
