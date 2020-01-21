<? php 

namespace Bookstore\Domain;



// use trait 
use Bookstore\Utils\Contract;
// another trait
use Bookstore\Utils\Communicator;

class Manager {
    use Contract, Communicator {
        Contrcat::sign insteadOf Communicator;
        Communicator::sign as makeSign;
    }; 

    public function sign(){
        echo 'From class itself';
    }

}