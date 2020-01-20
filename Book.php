<? php

class Book {
    //properties or class variables
    public $isbn;
    public $title;
    public $author;
    public $available;

    // magic method
    public function __construct($isbn, $title, $author, $available){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
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

// instantiating(using) class
$harry_potter = new Book(6576586, "Harry Potter and the Magicians", "John Doe", 10);
// removed the direct instantiation since we are now using our magic method

if ($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title. '<br>';
}else {
    echo 'Sorry its gone!';
}

var_dump($harry_potter);