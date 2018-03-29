<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:55
 */

namespace ShWang\DesignPattern\Commands;


/**
 *  命令接收者(Receiver)
 * Class Light
 */
class Light{
    public function on(){
        echo 'light on';
    }

    public function off(){
        echo 'light off';
    }
}