<?php namespace App\Controllers;

class Neighbourhood extends BaseController
{
    private $db;
    function __construct(){
        $this->db = \Config\Database::connect();
    }

    //GET show all neighbor from DB
    //http://realtor:8888/neighbor
    public function index()
    {
        $sql = "SELECT NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE FROM `NEIGHBORHOOD`;";
        $Neighbor_query = $this->db->query($sql);
        $data['NeighborList'] = $Neighbor_query->getResult();
        return view('show_all_neighbor', $data);
    }

    //cascade deleting a neighbor from DB
    public function destroy($id = null){
        $selection = $_POST["selection"];
        $sql = "DELETE FROM NEIGHBORHOOD WHERE NEIGHBOR_ID = " . $selection;
        $this->db->simpleQuery($sql);
        return redirect("neighbor");
    }



}
