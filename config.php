<?php
date_default_timezone_set('Europe/Bucharest');



if(strpos($_SERVER['SCRIPT_NAME'] ,'/install/index.php') !== false ) {
    require_once 'config/install.php';
} else {
    if (!file_exists('config/db.php')) {
        dd($_SERVER);
        header('Location: install');
        exit;
    } else {
        require_once 'inc/functions.php';
        // ADD other functions
    }

};


require_once 'config/constants.php';

?>