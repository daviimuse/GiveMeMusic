<?php
        session_start();
        session_destroy();
        header("location:/GiveMeMusic/index.php");
        exit();

?>