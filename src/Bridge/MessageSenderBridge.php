<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:47
 */

namespace ShWang\DesignPattern\Bridge;


class MessageSenderBridge
{
    /**
     * @var Sender
     * */
    private $sender = null;

    /**
     * @var Message
     * */
    private $message = null;

    public function send($to, $content){
        //先把消息等级确定了
        $content = $this->message->msg($content);

        $target = $this->sender->send($to);

        return $target.$content;
    }
}