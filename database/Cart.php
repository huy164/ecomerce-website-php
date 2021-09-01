<?php
class Cart{
    public $db = null;
    public function __construct(DBController $db){
        if (!isset($db->con))return null;
        $this->db = $db;
    }

    //insert to cart table
    public function insertIntoCart($params=null,$table="cart"){
        if($this->db->con!=null){
            if ($params!=null) {
                //insert into cart(user_id) value(0) --sql query
                //get table columns
                $columns=implode(",",$params);
            }
        }
    }
}
?>