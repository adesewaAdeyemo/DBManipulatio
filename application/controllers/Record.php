<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('record_model');
        // $postData = $this->input->post();
    }

	public function index()
	{

        $data['recordArray'] = $this->record_model->run();
		$this->load->view('record/record_index', $data);

	}


    public function update()
	{   
        if(!empty($_POST['record_id'])){
        $data['popArray'] = $this->record_model->runup();
        }else{
            $data['popArray']=array();
            // return false;
        }
        $this->load->view('record/update', $data);
        if (isset($_POST['update'])){
            // $this->record_model->updaterecord();
            $postData = $this->input->post();
            print_r($postData);
			$album = $postData['album'];
			$artist = $postData['artist'];
			$band = $postData['band'];
			$rating = $postData['rating'];
			$id = $postData['id'];
            $this->load->database();
            $this->db;
            $data = array(
                'song_name' => $album,
                'artist' => $artist,
                'band_id' => $band,
                'rating' => $rating,
                'id' => $id
            );
            $query = $this->db->update('highlife', $data, array('id' => $id));
            echo "its a success";
            echo "<br>";
        }
    }


    public function add()
	{
		$this->load->view('record/add');
        if (isset($_POST['add'])){
            $this->record_model->addtorecord();
        }
	}
    public function delete()
	{
		$this->load->view('record/delete');
        if (isset($_POST['confirmid'])){
            $this->record_model->deleterecord();
        }
    }
    public function edit()
	{
        $data['writeRecordArray'] = $this->record_model->editRecord();
		$this->load->view('record/edit', $data);

        if (isset($_POST['edit'])){
            // $this->record_model->updaterecord();
            $postData = $this->input->post();
            print_r($postData);
			$album = $postData['album'];
			$artist = $postData['artist'];
			$band = $postData['band'];
			$rating = $postData['rating'];
			$id = $postData['id'];
            $this->load->database();
            $this->db;
            $data = array(
                'song_name' => $album,
                'artist' => $artist,
                'band_id' => $band,
                'rating' => $rating,
                'id' => $id
            );
            $query = $this->db->update('highlife', $data, array('id' => $id));
            if($query){
            // $content= "$id updated successfully";
            // echo "<br>";
            header("Location: ./");
            }
        }
	}
}

