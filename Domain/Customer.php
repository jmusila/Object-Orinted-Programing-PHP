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
  
// interface can extend from another interface
Interface Customer extends Payer{

    // abstract methods
    public function getMonthlyFee();
    public function getAmountToBorrow();
    public function getType();
}