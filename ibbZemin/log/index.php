<?php
    require_once 'log.php';

    $log = new Log('file'); //dbase, file, eğer boşsa varsayılan: file

    try {
        $log->write("Log kaydı otomatik oluşturuldu ve kaydedildi.", date("Y-m-d H:i:s"));
    } catch (Exception $e) {
        echo $e->errorMessage();
    }

?>