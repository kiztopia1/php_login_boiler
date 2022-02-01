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
    <form action="<?php FORM_PATH. '/signup.php' ?>">
        <label for="name">name</label>
        <input type="text" id="name">
        <label for="password">password</label>
        <input type="text" id="password">
        <button>sign up </button>
    </form>
</body>
</html>