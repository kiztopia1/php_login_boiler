<?php include('../initialize.php') ?> 
<?php 
if( isset($_POST['name']) and isset($_POST['password'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    echo $name . $password;
    $name_and_password_verify = query_check_user_password($name, $password);
    if($name_and_password_verify == true){
        session_start();
        $_SESSION['name'] = $name;
        echo $name . 'done';
    }else{
        header("location: ". '../../public/signin?error=not matched');
        exit();
    }



    
}else{
    header("location: ". '../../../public/signin');
        exit();
}
?>