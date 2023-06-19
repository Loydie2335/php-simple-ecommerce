<?php
require_once __DIR__."/config/init.php";
session_start();
$template = new Template('View/product-page.php');

$product = new Product;
$productCategory = new ProductCategory;
$cart = new Cart;
$template->success_message = [];
if(isset($_GET['product_id'])){
    $data = $product->getProductById($_GET['product_id']);
    $template->selectedProduct = $data[0];

    if(!count($template->selectedProduct) > 0){
        $template->selectedProduct = [];
        echo $template;
        exit(0);
    }
    $template->categoryName = $productCategory->getCategoryNameById($template->selectedProduct['category_id']);
    // echo "<pre>";
    // var_dump($template->selectedProduct);
    // echo "</pre>";
}
if(isset($_GET['add_to_cart'])){
    $product_id = $_GET['product_id'];
    $quantity = $_GET['quantity'];
    $user_id = $_GET['user_id'];

    //var_dump($cart->addToCart($product_id,$quantity,$user_id));

    if($cart->addToCart($product_id,$quantity,$user_id)){
        $template->success_message = "Product Successfully Added to Cart";
    }
    else{
        $template->general_error = "Oops, There was an Error!";
    }
}
echo $template;
?>