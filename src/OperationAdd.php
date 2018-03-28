<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:13
 */

namespace ShWang\DesignPattern;


class OperationAdd extends Operation
{
    public  function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->getValue1() + $this->getValue2();
    }
}