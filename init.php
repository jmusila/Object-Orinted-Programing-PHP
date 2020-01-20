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
var_dump($first_customer->firstname);

/**
 * encapsulation - accessors - mutators
 */

 /**
  * private visibility is great to maintain internal structure of your classes 
  * as a developer, you can change the internal structure without 
  * affecting the external code (for example other classes that extends it - coming later)
  * that uses it
  * so how do we read or change these private properties or methods from outside
  * or other classes?
  * we can do so using getters and setters
  * these methods are also known as accessors
  */

var_dump($first_customer->getFirstName());
var_dump($first_customer->getSurname());
var_dump($first_customer->getFullName());

var_dump($first_customer->setEmail('me@gmail.com'));

/**
 * static properties and methods
 */

 /**
  * php allows us to have multiple properties and methods linked to
  * the class itself rather than to the object
  */

// referencing using existing instance
var_dump($first_customer::getLastId());

// referencing using class name itself
Customer::getLastId();
