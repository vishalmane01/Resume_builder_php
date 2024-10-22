<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST){
$post = $_POST;

if($post['full_name'] && $post['email_id'] && $post['password']){

   $full_name = $db->real_escape_string($post['full_name']);
   $email_id = $db->real_escape_string($post['email_id']);
   $password =md5 ($db->real_escape_string($post['password']));


   $result = $db->query("SELECT COUNT(*) as users FROM users WHERE (email_id = '$email_id' && password = '$password')");
   $resut = $result->fetch_assoc();



if ($resut['users']){

    $fn->setError($email_id.' is already registered. Please login to your account.');
    $fn->redirect('../register.php');
    die();
}


   try{
   $db->query("INSERT INTO users(full_name,email_id,password) VALUES('$full_name','$email_id','$password')");
   $fn->setAlert('Registered successfully.');
   $fn->redirect('../login.php');
}

catch(Exception $error){
    $fn ->setError($error->getMessage());
    $fn->redirect('../register.php');
}


}else{
    $fn->setError($email_id.'Please fill the form');
    $fn->redirect('../register.php');
}

}else{
    
    $fn->redirect('../register.php');

}
?>