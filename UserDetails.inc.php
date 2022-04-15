<?php
    class UserDetails extends DatabaseCon {
        protected function getAllUsers() {
            $sql = "SELECT * FROM users";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if ($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $userData[] = $row;
                }
                return $userData;
            }
        }
    }
?>