<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:44
 */

namespace ShWang\DesignPattern\Bridge;


class SpecialMessage extends Message
{
    public function msg($content)
    {
        // TODO: Implement msg() method.
        return '特殊消息:' . $content;
    }
}