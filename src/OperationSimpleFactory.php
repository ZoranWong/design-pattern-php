<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/28
 * Time: 下午11:17
 * @description
 * 简单工厂模式是属于创建型模式，又叫做静态工厂方法（Static Factory Method）模式。简单工厂模式是由一个工厂对象决定创建出哪一种产品类的实例。
 */

namespace ShWang\DesignPattern;


class OperationSimpleFactory
{
    public static function createOperation ($operate) {
        $opt = null;
        switch ($operate){
            case "+":{
                $opt = new OperationAdd();
                break;
            }

            case "-":{
                $opt = new OperationSub();
                break;
            }

            case "/":{
                $opt = new OperationDiv();
                break;
            }

            case "*": {
                $opt = new OperationMul();
                break;
            }
        }
        return $opt;
    }
}