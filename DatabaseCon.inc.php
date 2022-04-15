<?php
    class DatabaseCon{
        private $serverName;
        private $username;
        private $password;
        private $db_name;

        protected function connect(){
            $this->serverName = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->db_name = "garry_demo_database";

            $conn = new mysqli($this->serverName, $this->username, $this->password, $this->db_name);
            return $conn;
        }
    }
?>