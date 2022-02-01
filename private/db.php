<?php 

require_once('db_config.php');


function db_connect() {
    $connection = mysqli_connect(server, user, password, db_name);
    return $connection;
}
function db_close($connection) {
    if(isset($connection)){
        mysqli_close($connection);
    }
}
?>