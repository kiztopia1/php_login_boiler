<?php 
    function query_find_user($id) {
        global $db;
        $sql = "select * from users where id=".$id;
        $result = mysqli_query($db, $sql);
        return $result;
    }
    function query_get_users() {
        global $db;
        $sql = "select * from users";
        $result = mysqli_query($db, $sql);
        return $result;
    }
    function query_add_user($name, $password) {
        global $db;
        $sql = 'insert into users ';
        $sql .= '(name, password) values ';
        $sql .= '("'. $name.'" , "'. $password. '" )';
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>