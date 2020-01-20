<? php

class Book {
    //properties or class variables
    public $isbn;
    public $title;
    public $author;
    public $available;

    // methods are functions
    public function getPrintableTitle() {
        $result = $this->title . ' by '. $this->author;
        if (!$this->available){
            $result .= 'Not Available';
        }
        return $result;
    }
}

// instantiating(using) class
$harry_potter = new Book();
$harry_potter->isbn = 6576586;
$harry_potter->title = "Harry Potter and the Magicians";
$harry_potter->author = "John Doe";
$harry_potter->available = 10;
var_dump($harry_potter);