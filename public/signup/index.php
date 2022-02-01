<?php include('../../private/initialize.php') ?>
<!DOCTYPE html>

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up </title>
</head>
<body>
    <h2>sign up </h2>
    <?php $users = query_get_users();
    $count = mysqli_num_rows($users);
    echo $count;?>

    <?php while($user = mysqli_fetch_assoc($users)){ ?>

    <?php }; ?>
    <form action="../../private/form//signup.php" method="POST">
        <label for="name">name</label>
        <input type="text" id="name" name="name">
        <label for="password">password</label>
        <input type="text" id="password" name="password">
        <button type="submit" name='submit' >sign up </button>
    </form>
</body>
</html>