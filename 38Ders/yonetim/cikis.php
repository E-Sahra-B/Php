<?php

    session_destroy();
    set("kullanici", "", time()-1);
    echo "<script>
        window.location.href='index.php';
        </script>";


?>