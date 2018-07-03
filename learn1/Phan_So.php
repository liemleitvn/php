<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/20/2018
 * Time: 9:30 PM
 */

class Phan_So
{
    //Khai bao properties
    public $numerator;
    public $denominator;

    function __construct($numerator, $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    //Tim uoc so chung lon nhat cua 2 so nguyen
    function GreatestCommonDivisor($a, $b)
    {
        $minNumber = ($a < $b) ? $a : $b;
        for($i = $minNumber; $i >0; $i--)
        {
            if($a%$i == 0 && $b%$i == 0)
            {
                return $i;
            }
        }
        return 0;
    }

    //Toi gian phan so
    function FractionLowest()
    {
        //x la uoc so chung cua tu so va mau so
        $x = $this->GreatestCommonDivisor($this->numerator,$this->denominator);
        $this->numerator = $this->numerator/$x;
        $this ->denominator = $this->denominator/$x;

    }

    //Tong 2 phan so
    function SumFraction($a_numerator, $a_denominator)
    {
        $fraction = new Phan_So($a_numerator,$a_denominator);
        $fraction->numerator = ($fraction->numerator*$this->denominator) + ($fraction->denominator*$this->numerator);
        $fraction->denominator = $fraction->denominator*$this->denominator;
        $fraction->FractionLowest();
        return $fraction;
    }
}