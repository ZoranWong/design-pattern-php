<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:53
 */

namespace ShWang\DesignPattern\Facade;


class Sensor
{
    /**
     * 启动感应器
     */
    public function activate() {
        echo 'Activating the sensor.<br />';
    }

    /**
     * 关闭感应器
     */
    public function deactivate() {
        echo 'Deactivating the sensor.<br />';
    }

    /**
     * 触发感应器
     */
    public function trigger() {
        echo 'The sensor has been trigged.<br />';
    }
}