<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Configuracoes extends CI_Controller {
    //put your code here
    
     /*acrescentamos o construct como primero passo*/
     public function __construct() {
         
        parent::__construct();
        $this->load->model('premio_model');
        /*$this->load->model('usuario_model');*/  /*Ao retirar essa linha de código, a tela configuracoes/cadastrar premio funciona*/
        $this->load->model('conteudo_model');
        $this->load->model('objetos_model');
        $this->load->model('reconhecimento_model');
        $this->load->model('facilitadores_model');
        $this->load->model('empresa_model');
        //aqui comeca a inserção dos dados das redes sociais
        $this->load->model('facebookempresa_model');
    //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
       //$this->load->model('twitterempresa_model');
       //$this->load->model('instagranempresa_model');  
        $this->load->model('jogo_model');
        
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function dadosEmpresa(){ 
        
     $data['empresa'] = $this->empresa_model->get_empresa(); 
     
        $this->load->view('templates/header');
        $this->load->view('configuracoes/dadosEmpresa');
    }
    
     public function cadastrarRedesociais(){
        $data['facebookempresa'] = $this->facebookempresa_model->get_facebookempresa();
         
        $this->load->view('templates/header');
        $this->load->view('configuracoes/cadastrarRedesociais');
    }   
    
     public function jogo(){ 
         
        $this->load->view('templates/header');
        $this->load->view('configuracoes/jogo');
    }
    
     public function usuariosGestores(){
  
        // $data['usuario'] = $this->usuario_model->get_usuario(); /*retirar o comentario da construct*/ 
       
        $this->load->view('templates/header');
        $this->load->view('configuracoes/usuariosGestores',$data);
    }
    
       public function conteudo(){
           
       $data['conteudo'] = $this->conteudo_model->get_conteudo(); 
 
        $this->load->view('templates/header');
        $this->load->view('configuracoes/conteudo',$data);
    }
   
       public function categoriaObjetos(){
          
        $data['objetos'] = $this->objetos_model->get_objetos(); 
        
        $this->load->view('templates/header');
        $this->load->view('configuracoes/categoriaObjetos',$data);
    }
  
        public function reconhecimentos(){
       
        $data['reconhecimento'] = $this->reconhecimento_model->get_reconhecimento();  
        
        $this->load->view('templates/header');
        $this->load->view('configuracoes/reconhecimentos',$data);
    }

       public function premios(){
           
        $data['premio'] = $this->premio_model->get_premio(); 
 
        $this->load->view('templates/header');
        $this->load->view('configuracoes/premios',$data);
    }
    
     public function usuariosFacilitadores(){
         
        $data['facilitadores'] = $this->facilitadores_model->get_facilitadores();
         
        $this->load->view('templates/header');
        $this->load->view('configuracoes/usuariosFacilitadores',$data);
    }
    
  
    public function createPremio() {  /*A tela (configurações/cadastrar premio) esta cadastrada nos (premios()),sendo essa tela de tipo-de-premios*/
                                        /*ela devia estar na views (premio) (cadastrar-premio) */
        $this->premio_model->insert_premio();  /*Arrumando teria que mexer na viws na controller e até na model!, e levando esse trecho de código junto.!*/
        echo "sucesso";
    }
    
    public function createEmpresa(){            //esse codigo é da tela Dados da empresa
        $this->empresa_model->insert_empresa();
        echo "sucesso";
    }
    
    public function createFacebook(){                //esse codigo é da tela Cadaatrar rede Sociais
        $this->facebookempresa_model->insert_facebookempresa();
        
        echo "sucesso";
    }
    
   //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
      // public function createTwitter(){
      //$this->twitterempresa_model->insert_twitterempresa(); 
      //echo "sucesso cadastro o Twitter";
      //}
      // public function createInstagran(){
      // $this->instagranempresa_model->insert_instagranempresa();
      // echo "sucesso o cadastro Instagran";
      // }
    
      public function createJogo(){  //codigo que mostra a tala Jogo.
        $this->jogo_model->insert_jogo();
        echo"sucesso"; 
      }
    
}