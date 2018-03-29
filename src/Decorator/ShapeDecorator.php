<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:30
 */

namespace ShWang\DesignPattern\Decorator;


class ShapeDecorator implements Shape
{
    /**
     * @var Shape
     * */
    protected  $decoratedShape = null;

    public function __construct($decoratedShape){
        $this->decoratedShape = $decoratedShape;
    }

    public function draw(){
        $this->decoratedShape->draw();
    }
}