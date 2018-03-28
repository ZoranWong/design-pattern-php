<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:31
 */

namespace ShWang\DesignPattern\FactoryMethod;


class OperationSubFactory implements IOperationFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        return new OperationSub();
    }
}