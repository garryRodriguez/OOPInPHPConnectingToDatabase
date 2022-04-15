<?php
    class ShowAllUsers extends UserDetails{
        public function showAllUserData(){
            $usersData = $this->getAllUsers();
            foreach ($usersData as $userData) {
               echo $userData['id'] ." ";
               echo $userData['username'] ."<br>";
               echo $userData['password'] ."<br>";
            }

        }
    }
?>