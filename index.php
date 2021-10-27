<?php
class user{
    public $name;
    public $email;
    public $birthYear;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getname() {
        echo $this->name;
    }

    public function getAge() {
        return date('Y') - $this->birthYear;
    }
}



?>

# comand