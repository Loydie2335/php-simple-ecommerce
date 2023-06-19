<?php
require_once __DIR__."/config/init.php";
session_start();
$template = new Template('View/cart-page.php');

$cart = new Cart();
$template->general_error = [];
$template->success_message = [];



if(isset($_GET['delete_cart_id'])){
    $cart_id = $_GET['delete_cart_id'];

    if($cart->deleteFromCart($cart_id)){
        $template->success_message = "Items Successfully Deleted from Cart";
    }
    else{
        $template->general_error = "Oops, There was an Error!";
    }
}
$user_id = $_SESSION['active_user_id'];
$template->itemsInCart = $cart->getItemsInCart($user_id);
// echo "<pre>";
// var_dump($template->itemsInCart);
// echo "</pre>";

$template->sub_total_cart_price =  $cart->getTotalCartPrice($user_id);
$template->shipping = (int)$template->sub_total_cart_price == 0 ? 0 : 38;
$template->total_cart_price = $template->shipping + (int)$template->sub_total_cart_price;

$template->total_cart_rows = $cart->getTotalCartRows($user_id);
echo $template;
?>