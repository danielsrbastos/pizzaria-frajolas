<?php
class Login {
    private $email;
    private $password;
    private $id;

    public function __construct($email, $password, $id = '') {
        $this->email = $email;
        $this->password = $password; 
        $this->id = $id; 
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}
?>