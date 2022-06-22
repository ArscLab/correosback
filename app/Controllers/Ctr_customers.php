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

        $id = $this->request->getVar("id");
        $resp = 0;
        if(strlen($id) > 0 && is_numeric($id)){
            $query = $db->query("call deleteCustomer($id)");
            $resp = 1;
        }
        return $this->respond($resp);
       
    }

    public function updateCostumer()
    {
        $db  = \Config\Database::connect();
        //$query = $db->query("call createCustomer()");
        $name = $this->request->getVar("name");
        $first = $this->request->getVar("first");
        $last = $this->request->getVar("last");
        $phone = $this->request->getVar("phone");
        $id = $this->request->getVar("id");
        $query = $db->query("call updateCustomer('$name','$first','$last','$phone',$id)");
        return $this->respond(1);
    }

    public function insertCostumer()
    {
        $db  = \Config\Database::connect();
        //$query = $db->query("call createCustomer()");
        $name = $this->request->getVar("name");
        $first = $this->request->getVar("first");
        $last = $this->request->getVar("last");
        $phone = $this->request->getVar("phone");
        $idC = $this->request->getVar("idCard");
        $query = $db->query("call createCustomer('$name','$first','$last','$phone','$idC')");

        return $this->respond(1);
        //echo $this->request;
        //return $this->respond($query->getResult('array'));
    }
}
