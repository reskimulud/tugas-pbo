<?php
class User
{
    public $name;
    public $email;
    public $birthYear;
    public $address;

    protected function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    protected function setName($newName)
    {
        if ($newName != $this->name) {
            $this->name = $newName;
        } else {
            throw new Exception("Name tidak boleh sama", 1);
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return date('Y') - $this->birthYear;
    }

    public function __destruct(){
        echo "Nama : $this->name, Email : $this->email";
    }
}

class Member extends User
{

    private $memberId;

    public function __construct($name, $email)
    {
        parent::__construct($name, $email);
        $this->memberId = 'M' . time();
    }

    public function updateName($newName)
    {
        try {
            parent::setName($newName);
        } catch (Exception $e) {
            echo "Error : " . $e;
        }
    }
}

class Admin extends User
{

    private $adminId;

    public function __construct($name, $email)
    {
        parent::__construct($name, $email);
        $this->adminId = 'A' . time();
    }
}

$deri = new Admin('Deri Kurniawan', 'deri.netuchi@gmail.com');
$deri;

$reski = new Member("Reski Mulud", "reski.mulud@gmail.com");
$reski;

#update name
$reski->updateName("Reski Mulud");
echo $reski->name; // error karena nama awal sama dengan nama yang baru

?>
