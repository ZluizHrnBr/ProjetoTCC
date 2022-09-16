<?php 
    require_once("BancoDadosDAO.php");
    class Usuario{

        private $NomeUsuario;
        private $Senha;
        public function __construct($NomeUsuario, $Senha)
        {   
            $this->NomeUsuario = $NomeUsuario;  
            $this->Senha = $Senha;
        }

        public function getNomeUsuario()
        {
            return $this->NomeUsuario;
        }

        public function setNomeUsuario($NomeUsuario)
        {   
            $this->NomeUsuario = $NomeUsuario;
        }
        public function getSenha()
        {
            return $this->Senha;
        }

        public function setSenha($Senha)
        {   
            $this->Senha = $Senha;
        }
        public function CadastrarUsuario(){
            $query = "INSERT INTO usuario(NomeUsuario, Senha) 
                    VALUES (:NomeUsuario, :Senha)";    
            
            $sql = new BancoDadosDAO();

            $sql->Insert($query, array(
                ":NomeUsuario" => $this->getNomeUsuario(),
                ":Senha" => $this->getSenha()
            ));
        }

        

    }

   
?>