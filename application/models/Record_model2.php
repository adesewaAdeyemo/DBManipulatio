<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record_model2 extends CI_Model {

    // function runup()
	// {
    //     $this->load->database();
    //     $this->db;
    //     $_id= $_POST['record_id'];
    //     // $query= $this->db->query("SELECT * FROM highlife WHERE 'id'=$_id");
    //     $query = $this->db->get_where('highlife', array('id' => $_id));        $query->result_array();
    //     return $query->result_array();

	// }
    // function updaterecord(){
    //     $newalbum=$newartist=$newband=$newrating='';
    //     $this->load->database();
    //     $this->db;
    //     $newalbum= $_POST['album'];
    //     $newartist= $_POST['artist'];
    //     $newband= $_POST['band'];
    //     $newrating= $_POST['rating'];
    //     $newid= $_POST['id'];

    //     $data = array(
    //         'song_name' => $newalbum,
    //         'artist' => $newartist,
    //         'band_id' => $newband,
    //         'rating' => $newrating,
    //         'id' => $newid
    //     );
    //     // $_id= $_POST['record_id'];
    //     // $this->db->where('id', $newid);
    //     // $this->db->set('highlife', $data);

    //     $query = $this->db->set('highlife', $data, array('id' => $newid));
    // }
}
?>