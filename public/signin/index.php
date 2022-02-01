<?php include('../../private/initialize.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>
<body>
    <h1>sign in page</h1>

    <form action="<?php FORM_PATH. '/signin.php' ?>">
        <label for="name">name</label>
        <input type="text" id="name">
        <label for="password">password</label>
        <input type="text" id="password">
        <button>sign in </button>
    </form>
</body>
</html>