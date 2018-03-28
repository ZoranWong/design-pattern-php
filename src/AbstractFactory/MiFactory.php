<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:49
 */

namespace ShWang\DesignPattern\AbstractFactory;


use ShWang\DesignPattern\AbstractFactory\Mi\MiBook;
use ShWang\DesignPattern\AbstractFactory\Mi\MiTv;
use ShWang\DesignPattern\AbstractFactory\Mi\XiaoMi;

class MiFactory implements ITFactory
{
    public function mobile()
    {
        // TODO: Implement mobile() method.
        return new XiaoMi();
    }

    public function pc()
    {
        // TODO: Implement pc() method.
        return new MiBook();
    }

    public function tv()
    {
        // TODO: Implement tv() method.
        return new MiTv();
    }

}