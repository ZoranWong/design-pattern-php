<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:55
 */

namespace ShWang\DesignPattern\Commands;

/**
 * 具体命令(ConcreteCommand)
 * Class LightOn
 */
class LightOn implements Command{

    private $light;

    public  function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}