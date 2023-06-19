<?php 
function validateMobileNumber($mobile){
    if(preg_match('/^[0-9]{11}+$/', $mobile)) {
        return true;
    } else {
        return false;
    }
}

function validatePassword($password,$confirmPassword){
    if ($password !== $confirmPassword) {
        return  [
            "status" => "error",
            "message" => "Password and confirm password do not match."
        ];
    } elseif (strlen($password) < 8) {
        return [
            "status" => "error",
            "message" => "Password must be at least 8 characters long."
        ];
    } elseif (!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        return [
            "status" => "error",
            "message" => "Password must contain both letters and numbers."
        ];
    } else {
        return [
            "status" => "success",
        ];
    }
}
?>