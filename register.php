<?php 
require_once __DIR__."/config/init.php";
require_once __DIR__."/Helpers/Validation.php";

$template = new Template('View/register-page.php');

$user = new User;

$template->errors = [];
$errors_array = [];
$template->old = [];
$template->success_message = '';
$template->general_error = '';

if(isset($_POST['register'])){
    $data = $_POST;
    
    $required_fields = [
        'firstname',
        'lastname',
        'email',
        'password',
        'confirm_password',
        'province',
        'city_municipality',
        'barangay',
        'mobile_number',
        'street',
        'register'
    ];



    foreach($data as $key => $value){
        if(!in_array($key,$required_fields)){
            $errors_array[$key] = $key." is required";
        }
    }

    foreach($data as $key => $value){
        if(empty($value)){
            $errors_array[$key] = $key." is not filled";
        }
    }

    if(count($errors_array) > 0){
        $template->errors = $errors_array;
        $template->old = $_POST;
        echo $template;
        exit(0);
    }

    if(!validateMobileNumber($data['mobile_number'])){
        $errors_array['mobile_number'] = "Invalid Mobile Number";
        $template->errors = $errors_array;
        $template->old = $_POST;
        echo $template;
        exit(0);
    }

    



    $password_validation_result = validatePassword($data['password'],$data['confirm_password']);

    if($password_validation_result['status'] == "error"){
        $template->general_error = $password_validation_result['message'];
        $template->errors = $errors_array;
        $template->old = $_POST;
        echo $template;
        exit(0);
    }



    if($user->checkIfUserExists($data['email'])){
        $template->general_error = "User Already Exists";
        $template->errors = $errors_array;
        $template->old = $_POST;
        echo $template;
        exit(0);
    }
    else{
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        if($user->registerUser($data)){
            $template->success_message = "User Successfully Registered";
        }
    }

    $template->errors = $errors_array;
}

echo $template;
?>