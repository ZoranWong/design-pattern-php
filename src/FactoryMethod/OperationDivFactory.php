<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:33
 */

namespace ShWang\DesignPattern\FactoryMethod;


class OperationDivFactory implements IOperationFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        return new OperationDiv();
    }
}