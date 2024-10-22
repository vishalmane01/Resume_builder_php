<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_GET){
    $post = $_GET;

    if($post['id'] && $post['resume_id'] ){




        
        try{
            $query = "DELETE FROM experience WHERE id={$post['id']} AND resume_id={$post['resume_id']}";



            $db->query($query);
            $fn->setAlert('Experience deleted successfully.');
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