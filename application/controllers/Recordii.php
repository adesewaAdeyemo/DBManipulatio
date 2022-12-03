<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recordii extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('record_model2');

    }

    public function update()
	{   
        $this->load->view('record/update');
        if(!empty($_POST['record_id'])){
        $data['popArray'] = $this->record_model2->runup();
        }
        if (isset($_POST['add'])){
            $this->record_model2->updaterecord();
        }
    }
}
?>