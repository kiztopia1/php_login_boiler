<?php include('../initialize.php') ?> 
<?php 
if( isset($_POST['name']) and isset($_POST['password'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    echo $name . $password;
    $name_check_result = query_check_username($name);
    echo mysqli_num_rows($name_check_result);


    
}else{
    echo 'not work';
}
?>