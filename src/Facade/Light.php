<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:52
 */

namespace ShWang\DesignPattern\Facade;


class Light
{
    /**
     * 开灯
     */
    public function turnOn() {
        echo 'Turning on the light.<br />';
    }

    /**
     * 关灯
     */
    public function turnOff() {
        echo 'Turning off the light.<br />';
    }

    /**
     * 换灯泡
     */
    public function changeBulb() {
        echo 'changing the light-bulb.<br />';
    }
}