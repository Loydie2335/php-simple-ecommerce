<?php 
include_once "Database.php";

class Cart{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addToCart(int $product_id,int $quantity,int $user_id){

        $checkIfDuplicate = $this->db->queryWithArrayResult("SELECT * FROM cart WHERE user_id='$user_id' AND product_id='$product_id'");

        if(count($checkIfDuplicate) > 0){
            $new_quantity = (int)$quantity + (int)$checkIfDuplicate[0]['quantity'];
            return $this->db->query("UPDATE cart SET quantity='$new_quantity' WHERE user_id='$user_id' AND product_id='$product_id'");
            exit(0);
        }

        return $this->db->query("INSERT INTO cart(product_id,quantity,user_id) VALUES('$product_id','$quantity','$user_id')");
    }

    public function getItemsInCart($user_id) : array{
      return $this->db->queryWithArrayResult("SELECT *, cart.id AS cart_id, user.id AS user_id,products.id AS product_id FROM cart INNER JOIN products ON cart.product_id = products.id INNER JOIN user ON cart.user_id = user.id WHERE user.id = '$user_id' ORDER BY cart_id DESC");
    }

    public function deleteFromCart($id) : bool{
        return $this->db->query("DELETE FROM cart WHERE id='$id'");
    }

    public function getTotalCartPrice($user_id){
        $itemsInCarts = $this->db->queryWithArrayResult("SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id INNER JOIN user ON cart.user_id = user.id WHERE user.id = '$user_id'");
        $totalPrice = 0;
        foreach($itemsInCarts as $itemsInCart){
           $totalPrice += (int)$itemsInCart['quantity'] * (int)$itemsInCart['price']; 
        }

        return $totalPrice;
    }

    public function getTotalCartRows($user_id){
        $cart =  $this->db->single("SELECT COUNT(*) as cart_rows FROM cart WHERE user_id='$user_id'");
        return $cart['cart_rows'];
    }
}
?>