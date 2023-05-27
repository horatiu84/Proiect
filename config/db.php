
            
        <?php 

        $host = "localhost";
        $username = "root";
        $password = "";
        $dbName = "Proiect";


        $db = new mysqli($host, $username, $password, $dbName);

        if($db->connect_errno) {
            die('Connection faild: '.$db->connect_error);
        }

        