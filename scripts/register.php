<?php

$message = '';
$errors = [];


if(isset($_POST) && $_POST) {
    $rules = [
        'username' => 'required',
        'password' => 'required|min:5|max:10',
        'confirm_password' => 'required|match:password',
        'email' => 'required'
    ];

    $errors = validate($_POST,$rules);
    if(!$errors) {

        $checkUsername = $db-> query("SELECT id FROM users WHERE username='".$db->real_escape_string($_POST['username'])."'");
        if($checkUsername->num_rows) {
            $errors['username'][] = "Username already exists!";
        } else {
            $sql= "INSERT INTO users SET
            username ='".$db->real_escape_string($_POST['username'])."',
            password ='".password_hash($_POST['password'], PASSWORD_DEFAULT)."'
            ";

            if($db->query($sql)) {
                $user_id = $db->insert_id;

                $sql_profile = "INSERT INTO users_profile SET
                user_id = '".$user_id."',
                first_name = '" .$db->real_escape_string($_POST['first_name']). "',
                last_name = '" .$db->real_escape_string($_POST['last_name']). "',
                email = '" .$db->real_escape_string($_POST['email']). "',
                phone = '" .$db->real_escape_string($_POST['phone']). "' ";

                    if ($db->query($sql_profile) ) {
                        $message = 'Your account has been successfully created!';
                        $_POST=[];
                    } else {
                        $db->query('DELETE FROM users WHERE id = '.$user_id);
                        $message = 'An error occured while processing your request!'; 
                    }     
                } else {
                    $message = 'An error occured while processing your request!';
            }
        }

    };
   
}

?>