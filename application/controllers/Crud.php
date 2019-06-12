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
    /*Display*/
	public function displaydata()
	{
        $result['data']=$this->Crud_model->display_records();
        $this->load->view('display_records',$result);
    }
    /*Delete Record*/
   public function deletedata()
   {
        $id=$this->input->get('id');
        $this->Crud_model->deleterecords($id);
        echo "Data deleted successfully !";
   }
   /*update*/
   
   public function updatedata()
   {
        $id=$this->input->get('id');
        $result['data']=$this->Crud_model->displayrecordsById($id);
        $this->load->view('update_record',$result);

            if($this->input->post('save'))
            {
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $birth=$this->input->post('birthday');
                $address=$this->input->post('address');
                $gender=$this->input->post('gridRadios');
                $phone=$this->input->post('phone_no');
                $age=$this->input->post('age');

                
                $this->Crud_model->update_records($name,$email,$birth,$address,$gender,$phone,$age,$id);
                echo "Data updated successfully !";
            }
   }
    
}?>
