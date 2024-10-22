<?php

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

if ($_GET) {
    $post = $_GET;

    if ($post['id']) {
        $authid = $fn->Auth()['id'];

        try {   
            $querySkills = "DELETE FROM skills WHERE resume_id = {$post['id']}";
            $db->query($querySkills);
      
            $queryEducations = "DELETE FROM educations WHERE resume_id = {$post['id']}";
            $db->query($queryEducations);
     
            $queryExperience = "DELETE FROM experience WHERE resume_id = {$post['id']}";
            $db->query($queryExperience);

            $queryResumes = "DELETE FROM resumes WHERE id = {$post['id']} AND user_id = $authid";
            $db->query($queryResumes);

            $fn->setAlert('Resume deleted successfully.');
            $fn->redirect('../myresumes.php');

        } catch (Exception $error) {

            $fn->setError($error->getMessage());
            echo $error->getMessage();
           
            $fn->redirect('../myresumes.php');
        }
    } else {
        $fn->setError('Please fill the form. All fields are required.');
        $fn->redirect('../myresumes.php');
    }
    
} else {
    $fn->redirect('../myresumes.php');
}

?>
