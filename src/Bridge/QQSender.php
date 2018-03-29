<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:46
 */

namespace ShWang\DesignPattern\Bridge;


class QQSender extends Sender
{
    public  function send($to)
    {
        // TODO: Implement send() method.
        return 'QQ发给'. $to;
    }
}