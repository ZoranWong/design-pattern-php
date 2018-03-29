<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午3:54
 */

namespace ShWang\DesignPattern\Commands;


interface Command
{
    /**
     * 执行接口
     * @return mixed
     */
    public function execute();

    /**
     * 撤销接口
     * @return mixed
     */
    public function undo();
}