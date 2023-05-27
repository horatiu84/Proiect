<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= CSS_PATH; ?>/bootstrap.css"  rel="stylesheet"/>
    <link href="<?= CSS_PATH; ?>/style.css"  rel="stylesheet"/>
    <title>Proiect</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_PATH ?>">Proiect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="<?=BASE_PATH ?>">Home </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if (isset($logged_user)): ?>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="*" id="navbarDropdown" role="button">
                            <?= $logged_user['username']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-itrm" href="<?= PROFILE_PATH ?>">Profile</a>
                            <a class="dropdown-itrm" href="<?= CHANGE_PASSWORD_PATH ?>">Change password</a>
                        </div>
                    </li> 
                    <li class="nav-item">
                        <a href="<?= LOGOUT_PATH ?>" aria-current="page" class="nav-link">Logout</a>
                    </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="<?= LOGIN_PATH ?>" aria-current="page" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= REGISTER_PATH ?>" aria-current="page" class="nav-link">Register</a>
                        </li>
                        <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
    
<div class="container ">


