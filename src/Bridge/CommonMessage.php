<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:42
 */

namespace ShWang\DesignPattern\Bridge;


class CommonMessage extends Message
{
    public function msg($content)
    {
        // TODO: Implement msg() method.
        return '普通消息:' . $content;
    }
}