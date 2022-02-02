<nav>
    <h2 class="logo">hagre webapp</h2>
    <div class="nav-links">
        <?php if(isset($_SESSION['name'])) {
            echo "<h3>". $_SESSION['name'] ."</h3>";
            echo $_SESSION;
        } ?>
        <span>
        <a href="<?php echo WWW_ROOT. '/' ?>">HOME | </a>
        <a href="<?php echo WWW_ROOT. '/signup' ?>">sign up | </a>
        <a href="<?php echo WWW_ROOT. '/signin' ?>">signin</a>
        </span>
    </div>
</nav>