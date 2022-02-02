<?php 
    function query_find_user($id) {
        global $db;
        $sql = "select * from users where id= ? ;";
        $stmt = mysqli_stmt_init($db);
        mysqli_stmt_bind_param($stmt, 's', $id);
        mysqli_stmt_reset($stmt);
        $result = mysqli_query($db, $sql);
        return $result;
    }
    function query_get_users() {
        global $db;
        $sql = "select * from users";
        $stmt = mysqli_stmt_init($db);
        mysqli_stmt_bind_param($stmt, 's', $id);
        mysqli_stmt_reset($stmt);

        return ;
    }
    // this function return true if the username is not duplicated
    function query_check_username($name) {
        global $db;

        $sql = "select * from users where name = ? ;";
        $stmt = mysqli_stmt_init($db);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 's', $name);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) != 0 ){
            return false;
        }else{
            return true;
        }
    };
    function query_add_user($name, $password) {
        global $db;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = 'insert into users (name, password) values ( ? , ? )';
        $stmt = mysqli_stmt_init($db);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $name, $hashed_password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);     
        return $result;
    }

?>