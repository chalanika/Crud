<?php
class Crud extends CI_Controller {

    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
    parent::__construct();
    
    /*load database libray manually*/
    $this->load->database();
    
	/*load Model*/
    $this->load->model('Crud_model');
    }
    
    public function insert(){
       
        $this->load->view('insert');

        if($this->input->post('save'))
		{
           
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $birth=$this->input->post('birthday');
            $address=$this->input->post('address');
            $gender=$this->input->post('gridRadios');
            $phone=$this->input->post('phone_no');
            $age=$this->input->post('age');
            $this->Crud_model->insert($name,$email,$birth,$address,$gender,$phone,$age);	
            echo "Records Saved Successfully";
		}

    }


}?>
