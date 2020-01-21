<? php

namespace Bookstore\Domain;

// default arguments 
// type hinting 

class Book {
    //properties or class variables
    public $isbn;
    public $title;
    public $author;
    public $available;

    // magic method
    public function __construct(int $isbn, string $title, string $author, int $available){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    // another magic method
    // converts class properties to string 
    public function __toString() {
        $result = $this->title . ' by '. $this->author;
        if (!$this->available){
            $result .= 'Not Available';
        }
        return $result;
    }

    // methods are functions
    public function getPrintableTitle() {
        $result = $this->title . ' by '. $this->author;
        if (!$this->available){
            $result .= 'Not Available';
        }
        return $result;
    }

    // another method
    public function getCopy(){
        if ($this->available < 1){
            return false;
        }else {
            $this->available--;
            return true;
        }
    }
}

