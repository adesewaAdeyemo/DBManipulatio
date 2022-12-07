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
        
        $album= $_POST['album'];
        $artist= $_POST['artist'];
        $band= $_POST['band'];
        $rating= $_POST['rating'];
        $id= $_POST['id'];
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

    function runup()
    {
        $album=$artist=$band=$rating='';
        $this->load->database();
        $this->db;
        $_id= $_POST['record_id'];
        // $query= $this->db->query("SELECT * FROM highlife WHERE 'id'=$_id");
        $query = $this->db->get_where('highlife', array('id' => $_id));        
        $query->result_array();
        return $query->result_array();

    }
    function updaterecord($postid){
        // extract('postData');
        $newalbum=$newartist=$newband=$newrating=$newid='';
        $this->load->database();
        $this->db;
        $postData = $this->input->post();
        $album = $postData['album'];
        $artist = $postData['artist'];
        $band = $postData['band'];
        $rating = $postData['rating'];
        $id = $postData['id'];
        $data = array(
            'song_name' => $album,
            'artist' => $artist,
            'band_id' => $band,
            'rating' => $rating,
            'id' => $id
        );
        $query = $this->db->update('highlife', $data, array('id' => $id));
        return "I am a model";
    }
    function editRecord()
    {
        $this->load->database();
        $this->db;
        $query= $this->db->query("SELECT * FROM highlife");
        // $i=0;
        // do{
        // $query= $this->db->get_where("highlife", array('id'));
        $query->result_array();
        return $query->result_array();
        // }while{
        //     $i++;
        // }

    }
}