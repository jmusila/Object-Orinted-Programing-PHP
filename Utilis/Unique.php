<? php 

namespace Bookstore\Utils;

trait Unique {
    private static $lastId = 0;
    private $id; 

    public function setId(int $id){

        if ($id == null){
            // accessing static property
            $this->id = ++self::$lastId;
        }else {
            $this->id = $id;
            if($id> self::$lastId){
                self::$lastId = $id;
            }
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