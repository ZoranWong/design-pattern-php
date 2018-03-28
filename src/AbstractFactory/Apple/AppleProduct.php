<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:18
 */

namespace ShWang\DesignPattern\AbstractFactory\Apple;


use ShWang\DesignPattern\AbstractFactory\IProduct;

abstract class AppleProduct implements IProduct
{
    public function company()
    {
        // TODO: Implement company() method.
        return 'Apple';
    }
}