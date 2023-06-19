<?php
include_once "Database.php";
class User{
    
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function registerUser(array $data){
        $email = $data['email'];
        $password = $data['password'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $street = $data['street'];
        $barangay = $data['barangay'];
        $city_municipality = $data['city_municipality'];
        $province = $data['province'];
        $mobile = $data['mobile_number'];
        if($this->db->query("INSERT INTO user(email,password,first_name,last_name) VALUE('$email','$password','$firstname','$lastname')")){
            $user_id = $this->db->getLastInsertedId();

            return $this->db->query("INSERT INTO user_address(user_id,street,barangay,city_municipality,province,mobile) VALUES('$user_id','$street','$barangay','$city_municipality','$province','$mobile')");
        }

    }



    public function checkIfUserExists($email){
        $row = $this->db->queryWithArrayResult("SELECT * FROM user WHERE email='$email'");
        if(count($row) > 0){
            return true;
        }

        return false;
    }

    public function validateLogin($email,$password){
        $checkEmail = $this->db->queryWithArrayResult("SELECT * FROM user WHERE email='$email'");
        if(!count($checkEmail) > 0){
            return [
                "status" => "error",
                "message" => "User not found",
                "error_type" => "email"
            ];
        }

        $hashed_password = $checkEmail[0]['password'];

        if(password_verify($password,$hashed_password)){
            return [
                'status' => 'success'
            ];
        }
        else{
            return [
                "status" => "error",
                "message" => "Incorrect Password",
                "error_type" => "password"
            ];
        }
        
        
        
    }

    public function getUserInfoByEmail($email){
        return $this->db->queryWithArrayResult("SELECT *, user_address.id as address_id,user.id as id FROM user INNER JOIN user_address ON user_address.user_id = user.id WHERE email='$email'");

    }
}
?>