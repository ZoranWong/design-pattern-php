<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:32
 */

namespace ShWang\DesignPattern\FactoryMethod;


class OperationMulFactory implements IOperationFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        return new OperationMul();
    }
}