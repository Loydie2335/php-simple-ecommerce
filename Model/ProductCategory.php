<?php 
include_once "Database.php";

class ProductCategory{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCategories() : array {

        $result = $this->db->queryWithArrayResult("SELECT * FROM categories");

        return $result;
    }

    public function getCategoryNameById($cat_id) : string{
        $category_name = "";
        switch($cat_id){
            case 1 : $category_name = "Computer Package"; break;
            case 2 : $category_name = "Main Component"; break;
            case 3 : $category_name = "Accesories"; break;
            case 4 : $category_name = "Printer"; break;
            case 5 : $category_name = "Networking and Surveillance"; break;
            default : return "";
        }

        return $category_name;

    }
}

?>