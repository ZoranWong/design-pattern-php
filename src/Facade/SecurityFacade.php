<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 下午4:55
 */

namespace ShWang\DesignPattern\Facade;


/**
 * 门面类
 */
class SecurityFacade {

    /* 录像机 */
    private $_camera1, $_camera2;

    /* 灯 */
    private $_light1, $_light2, $_light3;

    /* 感应器 */
    private $_sensor;

    /* 警报器 */
    private $_alarm;

    public function __construct() {
        $this->_camera1 = new Camera();
        $this->_camera2 = new Camera();

        $this->_light1 = new Light();
        $this->_light2 = new Light();
        $this->_light3 = new Light();

        $this->_sensor = new Sensor();
        $this->_alarm = new Alarm();
    }

    public function activate() {
        $this->_camera1->turnOn();
        $this->_camera2->turnOn();

        $this->_light1->turnOn();
        $this->_light2->turnOn();
        $this->_light3->turnOn();

        $this->_sensor->activate();
        $this->_alarm->activate();
    }

    public  function deactivate() {
        $this->_camera1->turnOff();
        $this->_camera2->turnOff();

        $this->_light1->turnOff();
        $this->_light2->turnOff();
        $this->_light3->turnOff();

        $this->_sensor->deactivate();
        $this->_alarm->deactivate();
    }
}