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
$harry_potter = new Book();
$harry_potter->isbn = 6576586;
$harry_potter->title = "Harry Potter and the Magicians";
$harry_potter->author = "John Doe";
$harry_potter->available = 10;

if ($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title. '<br>';
}else {
    echo 'Sorry its gone!';
}

var_dump($harry_potter);