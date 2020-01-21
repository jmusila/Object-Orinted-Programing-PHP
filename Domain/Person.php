<? php

namespace Bookstore\Domain;
use Bookstore\Utils\Unique;

class Person {

    use Unique;
    // private static $lastId = 0;
    // private $id;
    private $email;
    protected $firstname;
    protected $surname;

    public function __construct($id, $firstname, $surname, $email){
        // $this->id = $id;

        // parent::__construct($firstname, $surname);

        //use trait
        $this->setId($id);

        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getSurname(){
        return $this->surname;
    }

    // using getter to get name
    public function getFirstName(){
        return $this->firstname;
    }

    public function getFullName(){
        return $this->firstname . ' ' . $this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    // using setter/mutators to set email
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function sayHi(){
        return 'Hi whats up? ' . $this->firstname;
    }
}