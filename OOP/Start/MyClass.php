<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/25/2018
 * Time: 12:25 AM
 */

class MyClass
{
    private $idClass;
    private $total;
    private $room;

    public function __construct($idClass,$total,$room)
    {
        $this->idClass = $idClass;
        $this->total = $total;
        $this ->room = $room;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->idClass;
    }
}