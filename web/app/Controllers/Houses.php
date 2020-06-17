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
        $sql_showAll = "SELECT HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID FROM `HOUSE`";
        $sql_count = "SELECT COUNT(*) AS COUNT FROM HOUSE;";
        $houseList_query = $this->db->query($sql_showAll);
        $data['houseList'] = $houseList_query->getResult();
        $data['houseList_count'] = $this->db->query($sql_count)->getResult();
        return view('show_all_houses', $data);
    }

    public function fromTable(){
        $table_name = $_POST["table"];
        $sql = "SELECT * FROM " . $table_name;
        $sql_tableSchema = "DESCRIBE " . $table_name;
        $query_results = $this->db->query($sql)->getResult();
        $query_tableSchema = $this->db->query($sql_tableSchema)->getResult();
        $tableSchema = array();
        foreach($query_tableSchema as $row){
            array_push($tableSchema,$row->Field);
        }

        $data["query_results"] = $query_results;
        $data["tableSchema"] = $tableSchema;
        $data["tableName"] = $table_name;

        return view("show_different_table", $data);
    }

    public function joinTable(){
        $table_name = $_POST["table"];
        //SELECT * FROM HOUSE INNER JOIN PREVIOUS_OWNERS ON HOUSE.HOUSE_ID = PREVIOUS_OWNERS.HOUSE_ID
        $sql = "SELECT * FROM HOUSE INNER JOIN ". $table_name ." ON HOUSE.HOUSE_ID = " . $table_name . ".HOUSE_ID";
        $query_results = $this->db->query($sql)->getResult();

        $tableSchema = array();

        $sql_tableSchema = "DESCRIBE HOUSE";
        $query_tableSchema = $this->db->query($sql_tableSchema)->getResult();
        foreach($query_tableSchema as $row){
            array_push($tableSchema,$row->Field);
        }

        $sql_tableSchema = "DESCRIBE " . $table_name;
        $query_tableSchema = $this->db->query($sql_tableSchema)->getResult();
        foreach($query_tableSchema as $row){
            array_push($tableSchema,$row->Field);
        }

        $data["query_results"] = $query_results;
        $data["tableSchema"] = $tableSchema;
        $data["tableName"] = $table_name;

        return view("show_different_table", $data);
    }

    public function select()
    {
        $selection_array = $_POST["selection_checkbox"];
        $selection_string = '';

        foreach ($selection_array as $value) {
            if ($selection_string == '') {
                $selection_string = $value;
            } else {
                $selection_string = $selection_string . ', ' .$value;
            }
        }

        $sql_selection = "SELECT " . $selection_string . " FROM `HOUSE`";
        $data['selection'] = $this->db->query($sql_selection)->getResult();
        $data['query_string'] = $selection_array;
        return view('select_one_column_houses', $data);
    }

    //GET redirect to an interface allowed a user to input
    //http://realtor:8888/houses/new
    public function new() {
        $sql_address_id = "SELECT ADDRESS_ID FROM `ADDRESS`";
        $sql_seller_id = "SELECT CUSTOMER_ID FROM `SELLER`";
        $sql_realtor_id = "SELECT REALTOR_ID FROM `REALTOR`";
        $sql_property_type_id = "SELECT PROPERTY_TYPE_ID FROM `PROPERTY_TYPE`";

        $data['address_id_list'] = $this->db->query($sql_address_id)->getResult();
        $data['seller_id_list'] = $this->db->query($sql_seller_id)->getResult();
        $data['realtor_id_list'] = $this->db->query($sql_realtor_id)->getResult();
        $data['property_type_id_list'] = $this->db->query($sql_property_type_id)->getResult();

        return view('create_house', $data);
    }

    //POST insert a house into DB
    public function create() {
        echo "create";
        $address_id = $_POST["address_id"];
        $listing_date = $_POST["listing_date"];
        $listing_price = $_POST["listing_price"];
        $seller_id = $_POST["seller_id"];
        $realtor_id = $_POST["realtor_id"];
        $floor_space = $_POST["floor_space"];
        $property_type_id = $_POST["property_type_id"];

        $sql_insert = "INSERT INTO `HOUSE` (`HOUSE_ID`, `ADDRESS_ID`, `LISTING_DATE`, `LISTING_PRICE`, `SELLER_ID`, `REALTOR_ID`, `FLOOR_SPACE`, `PROPERTY_TYPE_ID`) VALUES (NULL, ? , ? , ? , ? , ?, ?, ?)";
        $this->db->query($sql_insert, [$address_id, $listing_date, $listing_price, $seller_id, $realtor_id, $floor_space, $property_type_id])->getResult();
        return redirect("houses");
    }

    //GET edirect to an interface allowed a user to input
    //http://realtor:8888/houses/edit/1
    public function edit($house_id) {
        $sql_address_id = "SELECT ADDRESS_ID FROM `ADDRESS`";
        $sql_seller_id = "SELECT CUSTOMER_ID FROM `SELLER`";
        $sql_realtor_id = "SELECT REALTOR_ID FROM `REALTOR`";
        $sql_property_type_id = "SELECT PROPERTY_TYPE_ID FROM `PROPERTY_TYPE`";

        $data['address_id_list'] = $this->db->query($sql_address_id)->getResult();
        $data['seller_id_list'] = $this->db->query($sql_seller_id)->getResult();
        $data['realtor_id_list'] = $this->db->query($sql_realtor_id)->getResult();
        $data['property_type_id_list'] = $this->db->query($sql_property_type_id)->getResult();

        $sql ="SELECT HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID FROM `HOUSE` WHERE HOUSE_ID = " . $house_id;
        $data['house_edit'] = $this->db->query($sql)->getResult();

        return view('edit_house', $data);

    }

    //PUT update a house
    public function update() {
        $address_id = $_POST["address_id"];
        $house_id = $_POST["house_id"];
        $listing_date = $_POST["listing_date"];
        $listing_price = $_POST["listing_price"];
        $seller_id = $_POST["seller_id"];
        $realtor_id = $_POST["realtor_id"];
        $floor_space = $_POST["floor_space"];
        $property_type_id = $_POST["property_type_id"];

        $sql = "UPDATE `HOUSE` SET `ADDRESS_ID` = ?, `LISTING_DATE` = ?, `LISTING_PRICE` = ?, `SELLER_ID` = ?, `REALTOR_ID` = ?, `FLOOR_SPACE` = ?, `PROPERTY_TYPE_ID` = ? WHERE `HOUSE`.`HOUSE_ID` = " . $house_id;

        $this->db->query($sql, [$address_id, $listing_date, $listing_price, $seller_id, $realtor_id, $floor_space, $property_type_id])->getResult();
        return redirect("houses");
    }

    //POST price filter
    public function price_filter() {
        $price_upbound = $_POST["up"];
        $price_lowbound = $_POST["down"];
        $sql = "SELECT HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID  FROM `HOUSE` WHERE LISTING_PRICE > ? and LISTING_PRICE < ?";
        $data['houseList_filter'] = $this->db->query($sql, [$price_lowbound, $price_upbound])->getResult();
        $data["filter_condition_up"] = $price_upbound;
        $data["filter_condition_down"] = $price_lowbound;
        return view('filter_houses', $data);
    }

    public function avg(){
        $sql_groupBy = "CREATE OR REPLACE VIEW GourpByTable AS SELECT PROPERTY_TYPE_ID, AVG(LISTING_PRICE) AS AVG, count(*) AS COUNT FROM `HOUSE` GROUP by PROPERTY_TYPE_ID;";
        $sql_join = "SELECT GourpByTable.PROPERTY_TYPE_ID, TYPE, AVG, COUNT FROM GourpByTable INNER JOIN PROPERTY_TYPE on. PROPERTY_TYPE.PROPERTY_TYPE_ID = GourpByTable.PROPERTY_TYPE_ID;";
        $this->db->query($sql_groupBy);
        $data['house_groupBy'] = $this->db->query($sql_join)->getResult();
        return view('avg_price', $data);
    }
}
