<?php
include_once "Database.php";
class Product{
    
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProducts() : array{

        $result = $this->db->queryWithArrayResult("SELECT *, products.id AS product_id FROM products ORDER BY RAND()");
        return $result;
    }

    // public function getProductsWithPagination($offset,$limit) : array{

    //     $result = $this->db->queryWithArrayResult("SELECT * FROM products LIMIT $offset,$limit");
    //     return $result;
    // }

    public function getProductByCategory($cat_id) : array {
        $result = $this->db->queryWithArrayResult("SELECT *, categories.name AS cat_name, products.name AS name, products.id AS product_id FROM products INNER JOIN product_categories ON product_categories.product_id = products.id INNER JOIN categories ON categories.id = product_categories.category_id WHERE categories.id='$cat_id' ORDER BY RAND()");

        return $result;
    }

    public function getProductBySearchKeyword($keyword) : array {
        $result = $this->db->queryWithArrayResult("SELECT *, products.id AS product_id FROM products WHERE name LIKE '%$keyword%' ORDER BY RAND()");
        return $result;
    }

    public function filterProductByPriceRange($min,$max){
        $result = $this->db->queryWithArrayResult("SELECT *, products.id AS product_id FROM products WHERE price >= $min AND price <= $max ORDER BY RAND()");

        return $result;
    }

    public function getProductById($id){
        $result = $this->db->queryWithArrayResult("SELECT *, products.id AS product_id, product_categories.id AS categories_id FROM products INNER JOIN product_categories ON products.id = product_categories.id WHERE products.id='$id'");
        return $result;
    }

    public function sortProducts(string $sortBy){

        if(!in_array($sortBy,['latest','oldest','low-to-high','high-to-low'])){
            return $result = [];
        }
        switch($sortBy){
            case "latest" : $query_condition = 'ORDER BY create_date DESC'; break;
            case "oldest" : $query_condition = 'ORDER BY create_date ASC'; break;
            case "low-to-high" : $query_condition = 'ORDER BY price ASC'; break;
            case "high-to-low" : $query_condition = 'ORDER BY price DESC'; break;
            default : return $result =[];
        }
        $result = $this->db->queryWithArrayResult("SELECT *, products.id AS product_id FROM products $query_condition");
        return $result;

    }
}
?>