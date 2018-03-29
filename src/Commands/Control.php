<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:56
 */

namespace ShWang\DesignPattern\Commands;

/**
 * 请求者(Invoker)
 * Class Control
 */
class Control{

    /**
     * @var Command
     * */
    protected $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    public function exec(){
        $this->object->execute();
    }

    public function undo(){
        $this->object->undo();
    }
}