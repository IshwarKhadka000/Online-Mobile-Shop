<?php 
class Cart{

    public $db = null;

    public function __construct(DBController $db){
        if(isset($this->con))
            return null;
        $this->db = $db;
    }

    //insert into cart
    public function insertintoCart($param = null,$table = "cart_table"){
        if($this->db->con!=null){
            if($param!=null){
                
                $columns = implode(',',array_keys($param));

               
                
                $values = implode(',',array_values($param));
               
                

                //insert into cart query
                $insertsql =sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);

                //execute query
                $result = $this->db->con->query($insertsql);
                return $result; 
                
            }
        }
    }
}

?>