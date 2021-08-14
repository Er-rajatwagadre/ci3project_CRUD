<?php

class CrudController extends CI_Controller
    {

    public function __construct(){
        parent::__construct();
        $this->load->model('crudModel');
    }

    public function index(){

        $data = array();
        $data['title'] = "All data list";
        $this->load->model('crudModel'); 
        $data['data'] = $this->crudModel->fetchAllData('emp'); 
        $this->load->view('template/header',$data);          
        $this->load->view('crudView/list',$data);
        $this->load->view('template/footer');
    }
    public function deldata($id){

        $this->load->model('crudModel');
        $this->crudModel->delId('id',$id,'emp');
        redirect('CrudController');

    }

    public function addEmp()
    {
        if($this->input->post('submit')){
            $name = $this->input->post('name',TRUE);
            $password = $this->input->post('password',TRUE);
            $data= array(
                'name'=>$name,
                'password' => $password
            );
            // print_r($data);
            // $data['name'] = $name;
            // $data['password'] = $password;
            $this->load->model('crudModel');
            $this->crudModel->add('emp',$data);
            redirect('crudController');
        }
    }

    public function editData($id){
        if($this->input->post('editSubmit')){
            $edited_data = array(
                'name'=>$this->input->post('name'),
                'password' => $this->input->post('password')
            ); 
            $this->load->model('crudModel');
            $this->crudModel->edit('emp','id',$id,$edited_data);
            redirect('crudController');
        }
        $data = array();
        $data['title'] = 'Edit employee data';
        $this->load->model('crudModel');
        $data['emp'] = $this->crudModel->fetchOneData('emp','id',$id);
        $this->load->view('template/header',$data);
        $this->load->view('crudView/editForm',$data);
        $this->load->view('template/footer');
    }

    //start creating basic rest api
    
    public function apiGetAll(){
        $this->load->model('crudModel');
        $data = $this->crudModel->fetchAllData('emp');
        // echo 'hi';
        print_r($data);

    }

    public function apiGetOne($id){
        $data = $this->crudModel->fetchOneData('emp','id',$id);
        if($data){
            print_r($data);
        }else{
            echo "data not found";
        }
    }

    public function apiDeleteData($id){
        $result =  $this->crudModel->delId('id',$id,'emp');
        // print_r($result);
        echo "data deleted";

    }

    public function apiEditData($id){
        if($this->input->get('editSubmit')){
            $edited_data = array(
                'name'=>$this->input->get('name'),
                'password' => $this->input->get('password')
            ); 
            $this->load->model('crudModel');
            $this->crudModel->edit('emp','id',$id,$edited_data);
            echo "Data Edited.";
        }

    }

    public function apiAddData(){

        if($this->input->post('addSubmit')){
            $name = $this->input->post('name');
            $password = $this->input->post('password');
            $data= array(
                'name'=>$name,
                'password' => $password
            );
            // $data['name'] = $name;
            // $data['password'] = $password;
            $this->load->model('crudModel');
            $this->crudModel->add('emp',$data);
           echo "added successfully.";
        }
        echo "post method allowed.";

    }

    //end api methods

}







