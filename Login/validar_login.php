<?php
    if(! $_SESSION["usuario"])
    {
        header("Location: AuladoClaudidi.php");
        exit();
    }
?>