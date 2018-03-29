<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:56
 */

namespace ShWang\DesignPattern\Commands;

/**
 * 具体命令(ConcreteCommand)
 * Class LightOff
 */
class LightOff implements Command{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}