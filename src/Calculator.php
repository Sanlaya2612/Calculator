<?php

namespace sanlaya2612\\calculator;


class Calculator
{
    public function add($first_num, $second_num)
    {
        return $first_num + $second_num;
    }
    public function subtract($first_num, $second_num)
    {
        return $first_num - $second_num;
    }
    public function multiply($first_num, $second_num)
    {
        return $first_num * $second_num;
    }
    public function divide($first_num, $second_num)
    {
        return $first_num / $second_num;
    }
}