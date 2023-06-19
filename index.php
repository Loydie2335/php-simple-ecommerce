<?php 
require_once __DIR__."/config/init.php";
//session_destroy();

$template = new Template('View/main-page.php');
$productCategory = new ProductCategory;
$product = new Product; 
$cart = new Cart;
$template->general_error = [];
$template->success_message = [];

$template->categories = $productCategory->getCategories();

if(isset($_GET['categoryID'])){
    $cat_id = $_GET['categoryID'];
    $template->products = [];
    $template->products = $product->getProductByCategory($cat_id);
    if(!count($template->products) > 0){
        $template->totalProducts = "0 Products in ".$productCategory->getCategoryNameById($cat_id)." Category";
    }
    else{
        $template->totalProducts = count($template->products)." Products in ".$template->products[0]['cat_name']." Category";
    }

    
}
elseif(isset($_GET['sortProducts'])){
    $sortBy = $_GET['sortBy'];
    $template->products = $product->sortProducts($sortBy);
    //var_dump($template->products);
    if(!count($template->products) > 0){
        $template->sortBy = $sortBy;
        $template->totalProducts = "0 Products Found";
    }
    else{
        $template->sortBy = $sortBy;
        switch($sortBy){
            case "latest" : $template->totalProducts = 'Filtered: Latest to Oldest Products'; break;
            case "oldest" : $template->totalProducts = 'Filtered: Oldest to Latest Products'; break;
            case "low-to-high" : $template->totalProducts = 'Filtered: Lowest to Highest Price'; break;
            case "high-to-low" : $template->totalProducts = 'Filtered: Highest to Lowest Price'; break;
            default : $template->totalProducts = count($template->products)." Total Products";
        }
        
    }

}
elseif(isset($_GET['filterByPriceRange'])){
    $min = (int)$_GET['min'];
    $max = (int)$_GET['max'];
    $template->products = [];
    if(!is_int($min) && !is_int($max)){
        $template->min = $min;
        $template->max = $max;
        $template->general_error = "No Products found matching your selection.";
        $template->totalProducts = "0 Products Found";
        echo $template;
    }


    if($min > $max){
        $template->min = $min;
        $template->max = $max;
        $template->general_error = "Min Price can't be greaterthan Max Price";
    }

    $template->products = $product->filterProductByPriceRange($min,$max);
    if(!count($template->products) > 0){
        $template->min = $min;
        $template->max = $max;
        $template->totalProducts = "0 Products between ".$min." - ".$max." ₱";
    }
    else{
        $template->min = $min;
        $template->max = $max;
        $template->totalProducts = count($template->products)." Products between ".$min." - ".$max." ₱";
    }

}
elseif(isset($_GET['product_name'])){
    $keyword = $_GET['product_name'];
    $template->products = $product->getProductBySearchKeyword($keyword);
    $template->totalProducts =  "Products related to '".$keyword."'<br><a href='index.php' class='ml-5'>Clear Search<a>";
}
elseif(isset($_GET['sortProducts'])){

}
else{
    $template->products = $product->getProducts();
    $template->totalProducts = count($template->products)." Total Products";
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