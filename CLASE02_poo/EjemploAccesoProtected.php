<?php 

abstract class MyParent {
    protected $data;
    public function __construct() {
        //$this->someMethodInTheParentClass();
        echo "constructor clase padre <br>";
    }
    protected function someMethodInTheParentClass() {
        $this->data = 123456;
    }
}
//And it's "child" class :

class Child extends MyParent {
    public function __construct() {
        echo "constructor clase hija <br>";
        //parent::__construct();
        $this->data=1234455;
    }
    public function getData() {
        //$this->data=1234455;
        return $this->data; // will return the $data property 
                            // that's defined in the MyParent class
    }
}
//That can be used this way :

$a = new Child();
var_dump($a->getData());


?>