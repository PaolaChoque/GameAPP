<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Jogadores extends CI_Controller {
    //put your code here
    
     public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){
      $data['jogadores'] = $this->usuario_model->get_usuarios();
         $this->load->view('templates/header');
        $this->load->view('jogadores/jogadores', $data);
    }
}

