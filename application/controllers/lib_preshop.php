<?php
   class Lib_preshop extends Controller {
    
    function Lib_preshop(){
      parent::Controller();
      
    }
    
    function daftar(){
    $username = $this->input->post('username');
    $pass1 = $this->input->post('password');
    $pass2 = $this->input->post('confirm_password');
    $telp = $this->input->post('telp');
    $nama = $this->input->post('nama');
    $this->system_user->tambah_user($username,$pass1,$pass2,$telp,$nama);
    }
}