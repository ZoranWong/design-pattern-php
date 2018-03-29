<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:32
 */

namespace ShWang\DesignPattern\Decorator;


class RedShapeDecorator extends ShapeDecorator
{
    public function __construct($decoratedShape)
    {
        parent::__construct($decoratedShape);
    }

    public function draw() {
        $this->decoratedShape->draw();
        $this->setRedBorder();
    }

    private function setRedBorder( ){
        echo "Border Color: Red";
    }
}