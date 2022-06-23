<?php

namespace App\Controllers;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

use CodeIgniter\RESTful\ResourceController;

class Ctr_customers extends ResourceController
{

    protected $modelName = 'App\Models\Md_customer';

    protected $format = 'json';

    public function loadCustomer()
    {
        $db  = \Config\Database::connect();
        $query = $db->query("call getCustomers()");
        return $this->respond($query->getResult('array'));
    }

    public function deleteCustomer()
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

    public function updateCustomer()
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

    public function insertCustomer()
    {
        $db  = \Config\Database::connect();
        //$query = $db->query("call createCustomer()");
        $name = $this->request->getVar("name");
        $first = $this->request->getVar("first");
        $last = $this->request->getVar("last");
        $phone = $this->request->getVar("phone");
        $idC = $this->request->getVar("idCard");
        $query = $db->query("call createCustomer('$name','$first','$last','$phone','$idC')");
        $rsLast = $db->query("call lastId()");
        $lastId = 0;
        foreach ($rsLast->getResult() as $row) {
            $lastId = $row->id;
        }
        $infoC = $db->query("call getCustomer('$lastId')");
        
        return $this->respond($infoC->getResult('array'));
        //echo $this->request;
        //return $this->respond($query->getResult('array'));
    }

    public function getCustomer()
    {
        $db  = \Config\Database::connect();
        //$query = $db->query("call createCustomer()");
        $idC = $this->request->getVar("id");
        $query = $db->query("call getCustomer('$idC')");

        return $this->respond($query->getResult('array'));
        //echo $this->request;
        //return $this->respond($query->getResult('array'));
    }
}
