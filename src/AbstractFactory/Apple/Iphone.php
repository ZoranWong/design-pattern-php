<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:09
 */
namespace ShWang\DesignPattern\AbstractFactory\Apple;

use ShWang\DesignPattern\AbstractFactory\IProduct;

class Iphone extends \AppleProduct
{
    public function brand()
    {
        // TODO: Implement brand() method.
        return 'Iphone';
    }
}