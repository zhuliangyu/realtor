<?php namespace App\Controllers;

class Address extends BaseController
{
    private $db;
    function __construct(){
        $this->db = \Config\Database::connect();
    }

    //GET show all address from DB
    //http://realtor:8888/address
    public function index()
    {
        $sql_showAll = "SELECT ADDRESS_ID, ADDRESS, NEIGHBOR_ID FROM `ADDRESS`";
        $realtorList_query = $this->db->query($sql_showAll);
        $data['AddressList'] = $realtorList_query->getResult();
        return view('show_all_address', $data);
    }
}
