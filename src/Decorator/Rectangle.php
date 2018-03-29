<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:29
 */

namespace ShWang\DesignPattern\Decorator;


class Rectangle implements Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Shape: Rectangle";
    }
}