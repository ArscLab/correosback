<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class Home extends BaseController
{

    //protected $Mdcostumer = 'App\Models\Md_customer';

    //protected $format = 'json';

    public function loadCostumer()
    {
        return view('welcome_message');
        //return $this->respond($this->model->getCustomer());
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
