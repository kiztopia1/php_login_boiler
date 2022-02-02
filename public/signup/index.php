<?php include('../../private/initialize.php'); include(SHARED_PATH. '/header.php'); ?>

    <h2>sign up </h2>

    <form action="../../private/form//signup.php" method="POST">
        <label for="name">name</label>
        <input type="text" id="name" name="name">
        <label for="password">password</label>
        <input type="text" id="password" name="password">
        <button type="submit" name='submit' >sign up </button>
    </form>

    <a href="">i have account login</a>
</body>
</html>