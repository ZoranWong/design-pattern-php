<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:53
 */

namespace ShWang\DesignPattern\Facade;


class Camera
{
    /**
     * 打开录像机
     */
    public function turnOn() {
        echo 'Turning on the camera.<br />';
    }

    /**
     * 关闭录像机
     */
    public function turnOff() {
        echo 'Turning off the camera.<br />';
    }

    /**
     * 转到录像机
     * @param <type> $degrees
     */
    public function rotate($degrees) {
        echo 'rotating the camera by ', $degrees, ' degrees.<br />';
    }
}