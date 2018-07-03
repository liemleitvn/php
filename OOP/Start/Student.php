<?php
/**
 * Created by Le Liem.
 * User: ASUS
 * Date: 6/25/2018
 * Time: 12:21 AM
 */

class Student
{
    private $id;
    private $name;
    private $birthday;
    private $gender;
    private $addr;
    private $class;
    private $deparment;

    //Ham khoi tao
    public function __construct($id,$name,$birthday,$addr,MyClass $class)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->addr = $addr;
        $this->class = $class;
    }

    public function __get($name)
    {
        if(property_exists($this,$name))
        {
            return $this->name;
        }
    }

    public function __set($name, $value)
    {
        if(property_exists($this,$name))
        {
            return $this->name = $value;
        }
    }

    public function __isset($name)
    {
        return isset($this->name);
    }

    public function __toString()
    {
        return $this->id;
    }

    public function __sleep()
    {
        return array($this->id, $this ->name,$this->class);
    }

    public function __wakeup()
    {
        $this->Exprot();
    }

    public function __call($name, $arguments)
    {
        if(in_array($name,array('Export')))
        {
            return call_user_func_array(array($this, $name),$arguments);
        }
    }

    private function Exprot()
    {
        echo "ID: ".$this->id;
        echo "Name: ".$this->name;
        echo "Birthday: ".$this->birthday;
        echo "Address: ".$this->addr;
        echo "Class: ".$this->class;
    }
}