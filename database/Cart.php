<?php
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    //insert to cart table
    public function insertIntoCart($params = null, $table = "cart")
    { //if $table param is not passed its value is "cart"
        if ($this->db->con != null) {
            if ($params != null) {
                //insert into cart(user_id) value(0) --sql query
                //get table columns
                $columns = implode(",", array_keys($params)); //get key of array $params
                $values = implode(",", array_values($params)); //get values of array $params

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s)values(%s)", $table, $columns, $values); //sprintf is used to write an formated string into varialbe

                //execute sql query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }


    //get user_id, cart_id,item_id from 1 product to isert to cart
    public function addToCart( $itemid,$userid)
    {
        if (isset($itemid) && ($userid)) //isset is used to check not null product
        {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );
            $result = $this->insertIntoCart($params); //call insertIntoCart function and write its return value into result variable
            if ($result) {
                //->_top-sale.php create event when click on button

                //reload the page 
                header("Location".$_SERVER['PHP_SELF']);
            }
        }
    }
}
