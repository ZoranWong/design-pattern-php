<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:12
 */

namespace ShWang\DesignPattern;


abstract class Operation
{
    private $value1 = 0;
    private $value2 = 0;

    public function getValue1 () {
        return $this->value1;
    }

    public function setValue1 ($value) {
        $this->value1 = $value;
    }

    public function getValue2 () {
        return $this->value2;
    }

    public function setValue2 ($value) {
        $this->value2 = $value;
    }

    public abstract function getResult ();
}