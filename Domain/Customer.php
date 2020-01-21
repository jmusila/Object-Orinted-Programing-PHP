<? php

namespace Bookstore\Domain;

/**
 * PRIVATE
 * The private visibility means that the properties and methods of the class can 
 * not be accesses by outside
 * 
 * PROTECTED 
 * The protected visibility means that the properties and methods of the class can 
 * be accessed only by its children class
 * 
 * PUBLIC
 * The public visibility means that the properties and methods of the class can 
 * be accessed by outside
 * 
 */
  
class Customer extends Person {

    // making static property
    private static $lastId = 0;

    private $id;
    // private $firstname;
    // private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email){
        // $this->id = $id;

        parent::__construct($firstname, $surname);

        if ($id == null){
            // accessing static property
            $this->id = ++self::$lastId;
        }else {
            $this->id == $id;
            if($id> self::$lastId){
                self::$lastId = $id;
            }
        }

        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    // accessor 
    public static function getLastId(){
        return self::$lastId;
    }

    // using getter to get name
    public function getFirstName(){
        return $this->firstname;
    }

    public function getSurname(){
    return $this->surname;
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
        // getting both child and parent implementation
        return 'Howdy ' . $this->firstname . parent::sayHi();
    }
}