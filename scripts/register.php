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

   
}

?>