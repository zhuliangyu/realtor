<?php namespace App\Controllers;

class Houses extends BaseController
{
    private $db;
    function __construct(){
        $this->db = \Config\Database::connect();
    }

    //GET show all houses from DB
    //http://realtor:8888/houses
    public function index()
    {
        $sql = "SELECT HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID FROM `HOUSE`";
        $houseList_query = $this->db->query($sql);
        $data['houseList'] = $houseList_query->getResult();
        return view('show_all_houses', $data);
    }

    //GET redirect to an interface allowed a user to input
    //http://realtor:8888/houses/new
    public function new() {
        echo "new";
        return view('create_house');
    }

    //POST insert a house into DB
    public function create() {

    }

    //GET edirect to an interface allowed a user to input
    //http://realtor:8888/houses/1/edit
    public function edit($house_id) {
        echo "edit";
        echo $house_id;
        return view('edit_house');

    }

    //PUT update a house
    public function update() {

    }

    //delete a house from DB
    public function destroy(){

    }



}
