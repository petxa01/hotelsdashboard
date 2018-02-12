

    <?php
        session_start();
        session_destroy();
        unset($_SESSION["loged"]);
        header ("Location: ../../Dashboard/home.php")
     ?>
