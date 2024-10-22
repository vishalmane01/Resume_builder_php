<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST){
$post = $_POST;


    if($post['full_name'] && $post['email_id'] && $post['mobile'] && $post['objective'] && $post['dob'] && $post['gender'] && $post['religion'] && $post['nationality'] && $post['marital_status'] && $post['hobbies'] && $post['languages'] && $post['address'] ){

        $columns='';
        $values='';

        foreach($post as $index => $value){
            $$index=$db->real_escape_string($value);
            $columns.=$index.',';
            $values.="'$value',";
        }

        $authid = $fn->Auth()['id'];

        $columns.='slug,updated_at,user_id';
        $values.= "'".$fn->randomstring()."','".time()."','$authid' ";


        try{
            $query = "INSERT INTO resumes";
            $query.="($columns )";
            $query.=" VALUES($values) ";


        $db->query($query);
        $fn->setAlert('Resume created successfully.');
        $fn->redirect('../myresumes.php');
        }

        catch(Exception $error){
            $fn ->setError($error->getMessage());
            $fn->redirect('../createresume.php');
        }


    }else{
        $fn->setError('Please fill the form. All fields are required.');
        $fn->redirect('../createresume.php');
    }

}else{
    
    $fn->redirect('../createresume.php');

}
?>