<?php include('../../private/initialize.php'); include(SHARED_PATH. '/header.php'); ?>

    <h1>sign in page</h1>

    <form action="../../private/form/signin.php" method="POST">
        <label for="name">name</label>
        <input type="text" id="name" name="name"><br>
        <label for="password">password</label>
        <input type="text" id="password" name="password">
        <button>login</button>
    </form>
    <br>
    <a href="">crate a new account</a>
</body>
</html>