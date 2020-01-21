<? php 

namespace Bookstore\Utils;
use Exception;

trait Unique {
    private static $lastId = 0;
    private $id; 

    public function setId(int $id){

        try {
            // use of Exceptions
            if($id < 1){
                throw new Exception('Id cannot be a negative number')
            }

            if ($id == null){
                // accessing static property
                $this->id = ++self::$lastId;
            }else {
                $this->id = $id;
                if($id> self::$lastId){
                    self::$lastId = $id;
                }
            }

        }catch(Exception $e){
            echo $e->getMessage();
        } finally {
            echo 'Done with try and catch';
        }
    }

    // accessor 
    public static function getLastId(){
        return self::$lastId;
    }

    public function getId(){
        retrun $this->id;
    }
}