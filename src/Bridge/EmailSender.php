<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:47
 */

namespace ShWang\DesignPattern\Bridge;


class EmailSender extends Sender
{
    public  function send($to)
    {
        // TODO: Implement send() method.
        return '邮箱发给'. $to;
    }
}