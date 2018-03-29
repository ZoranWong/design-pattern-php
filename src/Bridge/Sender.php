<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:41
 */

namespace ShWang\DesignPattern\Bridge;


abstract class Sender
{
    public abstract function send($to);
}