<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:55
 */

namespace ShWang\DesignPattern\Builder;


class CommonRoleBuilder extends RoleBuilder
{
    public function buildHead()
    {
        // TODO: Implement buildHead() method.
        $this->role->setHead('common head');
    }

    public function buildBody()
    {
        // TODO: Implement buildBody() method.
        $this->role->setBody('common body');
    }

    public function buildFace()
    {
        // TODO: Implement buildFace() method.
        $this->role->setFace('common body');
    }

    public function buildHp()
    {
        // TODO: Implement buildHp() method.

        $this->role->setHp('common hp');
    }

    public function buildMp()
    {
        // TODO: Implement buildMp() method.
        $this->role->setMp('common mp');
    }

    public function buildSp()
    {
        // TODO: Implement buildSp() method.
        $this->role->setSp('common sp');
    }
}