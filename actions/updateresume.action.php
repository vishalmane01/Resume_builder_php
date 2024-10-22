<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST){
$post = $_POST;


    if($post['id'] && $post['slug'] && $post['full_name'] && $post['email_id'] && $post['mobile'] && $post['objective'] && $post['dob'] && $post['gender'] && $post['religion'] && $post['nationality'] && $post['marital_status'] && $post['hobbies'] && $post['languages'] && $post['address'] ){

        $columns='';
        $values='';

$post2=$post;
unset($post2['id']);
unset($post2['slug']);

        foreach($post2 as $index => $value){
            $$index=$db->real_escape_string($value);
            $columns.=$index."='$value',";

        }

        $columns.='updated_at='.time();



        try{
            $query = "UPDATE resumes SET ";
            $query.="$columns ";
            $query.=" WHERE id={$post['id']} AND slug='{$post['slug']}'";


        $db->query($query);
        $fn->setAlert('Resume updated successfully.');
        $fn->redirect('../updateresume.php?resume='.$post['slug']);
        }

        catch(Exception $error){
            $fn ->setError($error->getMessage());
            $fn->redirect('../updateresume.php?resume='.$post['slug']);
        }


    }else{
        $fn->setError('Please fill the form. All fields are required.');
        $fn->redirect('../updateresume.php?resume='.$post['slug']);
    }

}else{
    
    $fn->redirect('../updateresume.php?resume='.$post['slug']);

}
?>