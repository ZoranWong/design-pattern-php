<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午2:49
 */

namespace ShWang\DesignPattern\Adapter;


class Adapter implements Target
{
    private $adaptee = null;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        // TODO: Implement request() method.
        $this->adaptee->specificRequest();
    }
}