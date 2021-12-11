<?php

class Web extends CI_Controller
{

    /* function  __contruct{}
    {
        //code...
        parent::__contruct();

    }
     */
    public function index()
    {
    $data['judul']="Halaman Depan";
    $this->load->view('v_header',$data);
    $this->load->view('v_index',$data); 
    $this->load->view('v_footer',$data);       
    }
public function about(){
    $data['judul']="about";
    $this->load->view('v_header',$data);
    $this->load->view('v_about',$data);
    $this->load->view('v_footer',$data);
}
}