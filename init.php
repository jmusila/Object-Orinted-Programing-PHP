<? php

// lets require classes
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

// instantiating(using) class
$harry_potter = new Book(6576586, "Harry Potter and the Magicians", "John Doe", 10);
// removed the direct instantiation since we are now using our magic method

$first_customer = new Customer(1, "John", "Doe", "johndoe@gmail.com");

var_dump($harry_potter);
var_dump($first_customer);

// trying to access firstname of the customer will throw an uncaught error 
// since it is private 
// var_dump($first_customer->firstname);