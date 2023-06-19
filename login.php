<?php 
require_once __DIR__."/config/init.php";
session_start();
$template = new Template('View/login-page.php');
$user = new User;

$template->general_error = '';
$template->old = '';

$errors_array = [];
$template->errors = [];


if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $required_fields = [
        "email",
        "password",
        "login"
    ];

    foreach($_POST as $key => $value){
        if(!in_array($key,$required_fields)){
            $errors_array[$key] = ucfirst($key)." is required";
        }
    }

    foreach($_POST as $key => $value){
        if(empty($value)){
            $errors_array[$key] = ucfirst($key)." is not filled";
        }
    }

    
    if(count($errors_array) > 0){
        $template->errors = $errors_array;
        $template->old = $_POST;
        echo $template;
        exit(0);
    }

    $login_result = $user->validateLogin($email,$password);

    if($login_result['status'] == "error"){
        $template->old = $_POST;
        $template->general_error = $login_result['message'];
        
    }
    else{
        $user_data = $user->getUserInfoByEmail($email);
        foreach($user_data[0] as $key => $value){
            $_SESSION['active_user_'.$key] = $value;
        }
        //var_dump($_SESSION);
        unset($_SESSION['active_user_user_id']);
        header("Location: index.php");
    }
}

echo $template;
?>