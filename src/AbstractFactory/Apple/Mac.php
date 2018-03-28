<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:17
 */

namespace ShWang\DesignPattern\AbstractFactory\Apple;


use ShWang\DesignPattern\AbstractFactory\IProduct;

class Mac extends AppleProduct
{
    public function brand()
    {
        // TODO: Implement brand() method.
        return 'Mac';
    }
}