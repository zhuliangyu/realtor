<?php namespace App\Controllers;

class Realtor extends BaseController
{
    private $db;
    function __construct(){
        $this->db = \Config\Database::connect();
    }

    //GET show all realtors from DB
    //http://realtor:8888/realtors
    public function index()
    {
        $sql_showAll = "SELECT REALTOR_ID, NAME, PHONE FROM `REALTOR`";
        $realtorList_query = $this->db->query($sql_showAll);
        $data['realtorList'] = $realtorList_query->getResult();
        return view('show_all_realtors', $data);
    }
}
