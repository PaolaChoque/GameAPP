<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Objetos extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('objetos_model');
        $this->load->model('cadastraobjetos_model');
        
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function listaObjetos(){
 
        $data['objetos'] = $this->objetos_model->get_objetos();  //codigo para a tabela da tela (listaObjetos)
        $data['cadastraobjetos'] = $this->cadastraobjetos_model->get_cadastraobjetos();  //codigo para a tela (listaobjetos)
        
        $this->load->view('templates/header');
        $this->load->view('objetos/listaObjetos',$data);
    }
    
     public function cadastrarObjetos(){
        $data['cadastraobjetos'] = $this->cadastraobjetos_model->get_cadastraobjetos();
         
        $this->load->view('templates/header');
        $this->load->view('objetos/cadastrarObjetos',$data);
    }
    
       public function createObjetos(){
        $this->cadastraobjetos_model->insert_cadastraobjetos();
        echo "sucesso";
    }
}