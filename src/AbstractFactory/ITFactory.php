<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:07
 */
namespace ShWang\DesignPattern\AbstractFactory;
interface ITFactory
{
    public function mobile();

    public function tv();

    public function pc();
}