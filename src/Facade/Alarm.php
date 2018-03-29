<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:54
 */

namespace ShWang\DesignPattern\Facade;


class Alarm {

    /**
     * 启动警报器
     */
    public function activate() {
        echo 'Activating the alarm.<br />';
    }

    /**
     * 关闭警报器
     */
    public function deactivate() {
        echo 'Deactivating the alarm.<br />';
    }

    /**
     * 拉响警报器
     */
    public function ring() {
        echo 'Ring the alarm.<br />';
    }

    /**
     * 停掉警报器
     */
    public function stopRing() {
        echo 'Stop the alarm.<br />';
    }
}
