<?php 
    function find_user($id) {
        global $db;
        $sql = "select * from user where id=".$id;
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>