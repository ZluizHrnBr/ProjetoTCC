<?php  

    class BancoDadosDAO{
        private $sql;
        public function __construct()
        {
             $this->sql = new PDO("mysql:dbname=cadastro;host=localhost","root","");
        
        }

    public function select($query, $param)
    {
      $param = array();
      $stmt = $this->sql->prepare($query);
      $stmt->execute($param);
      return $stmt;
    }
    
    public function InnerJoin($query, $param)
    {
       $param = array();
       $stmt = $this->sql->prepare($query);
       $stmt->execute($param);
      
       return $stmt;
    }
  
    public function Update($query, $param)
    {
      $param = array();
      $stmt = $this->sql->prepare($query);       
      $stmt->execute($param);
      
      return $stmt;
    }
    public function Delete($query, $param)
    {
      $param = array();            
      $stmt = $this->sql->prepare($query);
      $stmt->execute($param);
      
      return $stmt;
    }
    
    public function Insert($query, $param)
    {
      $stmt = array();
      $stmt = $this->sql->prepare($query);
      $stmt->execute($param);
      
      return $stmt;
    }
}

?>