<?php

class CrudModel extends CI_Model
{
    public function fetchAllData($table){
        $this->db->select('*');
        $this->db->from($table);
        $get = $this->db->get();
        $data = $get->result();
        return  $data;
    }

    public function fetchOneData($table,$key,$id){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($key,$id);
        $data = $this->db->get();
        return $data->result();
    }

    public function delId($key,$id,$table){
        $this->db->where($key,$id);
        $this->db->delete($table);
        return true;
    }

    public function add($table,$data){
        $this->db->insert($table,$data);
        return true;
        
    }

    public function edit($table,$key,$id,$data){
        $this->db->where($key,$id);
        $this->db->update($table,$data);
        return true;
    }
}


