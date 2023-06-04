<?php   
require_once('Database.php');
class FetchData{
    public $database=null;
    public function __construct()
    {
     $this->database=Database::getInstance();
    }
public function fetchItemDetail($itemId){
$data=$this->database->fetchItemDetails($itemId);

return $data;
}
public function fetchItem(){
    $data=$this->database->fetchItemDetail();
    return $data; 
}
}

?>