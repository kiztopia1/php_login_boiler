<?php include('../initialize.php') ?> 
<?php 
if( isset($_POST['name']) and isset($_POST['password'])){
    echo 'it works ';
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    echo $password. ' name: '. $name;
    $value = query_add_user($name, $password);
    echo $value;
    ;
}else{
    echo 'not work';
}
?>