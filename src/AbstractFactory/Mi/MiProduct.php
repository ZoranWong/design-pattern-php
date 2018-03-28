<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:23
 */

namespace ShWang\DesignPattern\AbstractFactory\Mi;


use ShWang\DesignPattern\AbstractFactory\IProduct;

abstract class MiProduct implements IProduct
{
    public function company()
    {
        // TODO: Implement company() method.
        return 'XiaoMi';
    }
}