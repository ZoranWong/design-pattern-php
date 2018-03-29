<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:43
 */

namespace ShWang\DesignPattern\Bridge;


class ImportantMessage extends Message
{
    public  function msg($content)
    {
        // TODO: Implement msg() method.
        return '重要消息:' . $content;
    }
}