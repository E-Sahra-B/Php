<?php

    class Log {

        private $type;
        private $file;
        private $connect;

        public function __construct($type = 'file') {
            $this->type = $type;
            if ($this->type == 'file') {
                $this->file();
            } else {
                $this->dbase();
            }
        }

        private function file() {
            $file = date("Ymd").'.log';
            if (!file_exists($file)) {
                touch($file);
            }
            $this->file = fopen($file, 'a+');            
        }

        private function dbase() {
            try {
                $this->connect = new PDO("mysql:host=localhost;dbname=eii_phpatolye;charset=utf8", "mehmet", "12345");
                ($this->connect)->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                ($this->connect)->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            catch (PDOException $e) {
                die("Database Error: " . $e->getMessage());
            }
        }

        public function write($message, $dateTime) {
            if ($this->type == 'file') {
                $content = "$dateTime\t$message\n";
                fwrite($this->file, $content);
                fclose($this->file);
            } else {
                $connect = $this->connect;
                $query = $connect->prepare("insert into log values (?,?,?)");
                $result = $query->execute(array(NULL, $message, $dateTime));
            }
        }

    }

?>