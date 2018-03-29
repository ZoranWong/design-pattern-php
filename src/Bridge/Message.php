<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:39
 */

namespace ShWang\DesignPattern\Bridge;


abstract class Message
{
    public abstract function msg($content);
}