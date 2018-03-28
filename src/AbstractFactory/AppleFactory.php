<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:09
 */

namespace ShWang\DesignPattern\AbstractFactory;


use ShWang\DesignPattern\AbstractFactory\Apple\AppleTv;
use ShWang\DesignPattern\AbstractFactory\Apple\Iphone;
use ShWang\DesignPattern\AbstractFactory\Apple\Mac;

class AppleFactory implements ITFactory
{
    public function mobile()
    {
        // TODO: Implement mobile() method.
        return new Iphone();
    }

    public function pc()
    {
        // TODO: Implement pc() method.
        return new Mac();
    }

    public function tv()
    {
        // TODO: Implement tv() method.
        return new AppleTv();
    }
}