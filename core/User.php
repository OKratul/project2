<?php
    include 'Database.php';
    class User extends Database{

        public function saveUser($name,$email,$password){
            $sql = "INSERT INTO users(username,password,email) VALUE ('$name','$email','$password')";
            $this->dataWrite($sql);
        }

    
        public function loginCheck($username, $password){
            $password = md5($password);
             $sql = "SELECT * FROM users WHERE username = '$username' AND password='$password' ";
            
          return $this->dataRead($sql);
        }

    }



?>
