<?php
/**
 * Created by Le Liem.
 * User: ASUS
 * Date: 6/21/2018
 * Time: 10:52 AM
 */

class studentDto
{
    //Khai bao cac thuoc tinh cua sinh vien
    public $id;
    public $name;
    public $birthday;
    public $gender;
    public $addr;

    //Ham khoi tao
    public  function __construct($id, $name, $birthday, $gender, $addr)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->addr = $addr;
    }

    //Ham tao mang chua cac thong tin sinh vien tu cac thuoc tinh cua sinh vien
    public  function std ()
    {
        $student = array(
            $this->id,
            $this->name,
            $this->birthday,
            $this->gender,
            $this->addr
        );
        return $student;
    }

}