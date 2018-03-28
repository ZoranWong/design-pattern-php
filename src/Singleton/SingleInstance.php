<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/27
 * Time: 下午5:56
 * @description
 * 单例模式，也叫单子模式，是一种常用的软件设计模式。在应用这个模式时，单例对象的类必须保证只有一个实例存在。
 * 许多时候整个系统只需要拥有一个的全局对象，这样有利于我们协调系统整体的行为。比如在某个服务器程序中，该服务
 * 器的配置信息存放在一个文件中，这些配置数据由一个单例对象统一读取，然后服务进程中的其他对象再通过这个单例对
 * 象获取这些配置信息。这种方式简化了在复杂环境下的配置管理。
 *
 */
namespace ShWang\DesignPattern\Singleton;

class SingleInstance
{
    protected static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance () {
        return static::$instance ? static::$instance : (static::$instance = new SingleInstance());
    }
}