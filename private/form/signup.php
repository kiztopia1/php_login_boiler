<?php include('../initialize.php') ?> 
<?php 
if( isset($_POST['name']) and isset($_POST['password'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    $value = query_add_user($name, $password);
  
    $redirect = WWW_ROOT;
    header("location: ". '../../../public/signin');
    exit();
    
}else{
    echo 'not work';
}
?>