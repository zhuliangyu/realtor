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

    public function delegateHouses($realtor_id){
        $sql = "SELECT HOUSE.HOUSE_ID, HOUSE.ADDRESS_ID, HOUSE.LISTING_PRICE, HOUSE.LISTING_DATE, HOUSE.SELLER_ID, HOUSE.REALTOR_ID, HOUSE.FLOOR_SPACE, HOUSE.PROPERTY_TYPE_ID FROM REALTOR INNER JOIN HOUSE ON REALTOR.REALTOR_ID = HOUSE.REALTOR_ID WHERE REALTOR.REALTOR_ID = " . $realtor_id;
        $housesList_query = $this->db->query($sql);
        $data['houseList'] = $housesList_query->getResult();
        $data['realtor_id'] = $realtor_id;

        return view('realtor_delegate_houses', $data);
    }

    public function findTopRealtor(){
        $sql = "SELECT REALTOR.REALTOR_ID, REALTOR.NAME FROM REALTOR WHERE NOT EXISTS (SELECT * FROM PROPERTY_TYPE WHERE NOT EXISTS (SELECT HOUSE.REALTOR_ID FROM HOUSE WHERE REALTOR.REALTOR_ID = HOUSE.REALTOR_ID AND HOUSE.PROPERTY_TYPE_ID = PROPERTY_TYPE.PROPERTY_TYPE_ID))";
        $housesList_query = $this->db->query($sql);
        $data['topRealtor'] = $housesList_query->getResult();
        return view('top_realtor', $data);
    }
}
