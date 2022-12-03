<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('record_model');
        $this->load->model('record_model2');

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
            $this->load->view('record/update', $data);
            $this->record_model->updaterecord();
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
            $this->record_model->updaterecord();
        }
	}
}


    // public function update()
	// {   
    //     if(!empty($_POST['record_id'])){
    //     $data['popArray'] = $this->record_model->runup();
    //     }
    //     $this->load->view('record/update', $data);
    //     if (isset($_POST['update'])){
    //         $this->record_model->updaterecord();
    //         echo "its a success";
    //         echo "<br>";
    //         echo "new id". $newid;
                // // $postData = $this->input->post();
                // $postData = array();
                // $newid=$_POST['id'];
                // // $postData['newalbum']=$_POST['album'];
                // // $postData['newartist']=$_POST['artist'];
                // // $postData['newband']=$_POST['band'];
                // // $postData['newrating']=$_POST['rating'];
                // $newalbum=$_POST['album'];
                // $newartist=$_POST['artist'];
                // $newband=$_POST['band'];
                // $newrating=$_POST['rating'];
                // $newid=$_POST['id'];
    
                // // $this->record_model->updaterecord($postArray);
                // echo "its a success";
                // echo "<br>";
                //     // echo "new id". $newid;
                    
    
    
                //     $postData = array(
                //         'song_name' => $newalbum,
                //         'artist' => $newartist,
                //         'band_id' => $newband,
                //         'rating' => $newrating,
                //         'id' => $newid
                //     );
                //     // echo "I am a model";
                //     $this->load->database();
                //     $this->db;    
                //     $query = $this->db->set('highlife', $postdata, array('id' => $newid));
    
    //     }
    // }


// }
