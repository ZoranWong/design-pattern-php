<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:55
 */

namespace ShWang\DesignPattern\Builder;

class SuperRoleBuilder extends RoleBuilder
{
    public function buildHead()
    {
        // TODO: Implement buildHead() method.
        $this->role->setHead('super head');
    }

    public function buildBody()
    {
        // TODO: Implement buildBody() method.
        $this->role->setBody('super body');
    }

    public function buildFace()
    {
        // TODO: Implement buildFace() method.
        $this->role->setFace('super body');
    }

    public function buildHp()
    {
        // TODO: Implement buildHp() method.

        $this->role->setHp('super hp');
    }

    public function buildMp()
    {
        // TODO: Implement buildMp() method.
        $this->role->setMp('super mp');
    }

    public function buildSp()
    {
        // TODO: Implement buildSp() method.
        $this->role->setSp('super sp');
    }
}