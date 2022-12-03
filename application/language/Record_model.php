<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record_model extends CI_Model {



    function run()
	{
        $this->load->database();
        $this->db;
        // $query= $this->db->query("SELECT * FROM highlife");
        $query= $this->db->get("highlife");
        $query->result_array();
        return $query->result_array();

	}

    function addtorecord()
	{
        $album=$artist=$band=$rating='';
        $this->load->database();
        $this->db;
        
        $data = array(
            'song_name' => $album,
            'artist' => $artist,
            'band_id' => $band,
            'rating' => $rating,
            'id' => $id
        );
        $query= $this->db->insert("highlife", $data);
	}
    function deleterecord(){
        $this->load->database();
        $this->db;
        $id= $_POST['record_id'];
        $this->db->delete('highlife', array('id' => $id));
    }
    // function runupdate()
	// {
    //     $this->load->database();
    //     $this->db;
    //     $query= $this->db->query("SELECT * FROM highlife WHERE 'id'=$_id");
    //     // $query= $this->db->get("highlife");
    //     $query->result_array();
    //     return $query->result_array();
	// }


}