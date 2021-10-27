<?php
class user{
    public $name;
    public $email;
    public $birthYear;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    protected function getname() {
        echo $this->name;
    }

    protected function getAge() {
        return date('Y') - $this->$birthYear;
    }
}

class member extends user {
    
    
    public function {
        
    }
}

class admin extends user {


}
?>

# comand