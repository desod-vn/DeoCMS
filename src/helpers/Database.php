<?php
    class Database
    {
        private $DB_HOST = "localhost";

        private $DB_USER = "root";

        private $DB_PASS = "";

        private $DB_NAME = "deocms";

        public function connect()
        {
            $connect = mysqli_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);

            mysqli_set_charset($connect, "utf8");

            if(mysqli_connect_errno() === 0)
                return $connect;
            
            return false;
        }
    }