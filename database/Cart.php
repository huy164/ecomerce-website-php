<?php
class Cart{
    public $db = null;
    public function __construct(DBController $db){
        if (!isset($db->con))return null;
        $this->db = $db;
    }

    //insert to cart table
    public function insertIntoCart($params=null,$table="cart"){//if $table param is not passed its value is "cart"
        if($this->db->con!=null){
            if ($params!=null) {
                //insert into cart(user_id) value(0) --sql query
                //get table columns
                $columns=implode(",",array_keys($params)); //get key of array $params
                $values=implode(",",array_values($params));//get values of array $params
                
                //create sql query
                $query_string=sprintf("INSERT INTO %s(%s)values(%s)",$table,$columns,$values); //sprintf is used to write an formated string into varialbe
               print_r($query_string);
            }
        }
    }
}
