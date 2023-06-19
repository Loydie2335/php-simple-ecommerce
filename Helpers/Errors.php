<?php 
function showError(array $errors,string $key,string $message=null){
    if(isset($errors[$key])): 
        if(!empty($message)){
            echo "<small class='text-danger text-bold'>"
                .$message.
            "</small>";
        }else{
            echo "<small class='text-danger text-bold'>"
                .ucfirst($errors[$key]).
            "</small>";
        }

    endif;
}

?>