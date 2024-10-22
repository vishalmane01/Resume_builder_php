<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST){
$post = $_POST;

if($post['full_name'] && $post['email_id']){

   $full_name = $db->real_escape_string($post['full_name']);
   $email_id = $db->real_escape_string($post['email_id']);
   $password =md5 ($db->real_escape_string($post['password']));

   $authid = $fn->Auth()['id'];
   $result = $db->query("SELECT COUNT(*) as users FROM users WHERE (email_id = '$email_id' && id != $authid)");

   $resut = $result->fetch_assoc();



if ($resut['users']){

    $fn->setError($email_id.' is already registered. Please login to your account.');
    $fn->redirect('../account.php');
    die();
}


if($password!=''){
   
   $db->query("UPDATE users SET full_name='$full_name',email_id='$email_id', password='$password' WHERE id = $authid ");

}else{

   $db->query("UPDATE users SET full_name='$full_name',email_id='$email_id' WHERE id = $authid ");
}   

$fn->setAlert('Profile updated successfully.');
$fn->redirect('../myresumes.php');

}else{
    $fn->setError('Please fill the form');
    $fn->redirect('../account.php');
}

}else{
    
    $fn->redirect('../account.php');

}
?>