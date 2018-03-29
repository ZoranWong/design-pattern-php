<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:45
 */

namespace ShWang\DesignPattern\Bridge;


class InternalSender extends Sender
{
    public  function send($to)
    {
        // TODO: Implement send() method.
        return '站内发给'. $to;
    }
}