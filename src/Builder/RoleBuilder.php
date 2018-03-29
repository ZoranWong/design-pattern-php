<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午9:53
 */

namespace ShWang\DesignPattern\Builder;


abstract class RoleBuilder
{
    protected $role = null;

    public function __construct()
    {
        $this->role = new Role();
    }

    public abstract function buildHead();

    public abstract function buildFace();

    public abstract function buildBody();

    public abstract function buildHp();

    public abstract function buildSp();

    public abstract function buildMp();

    public function getResult () {
        return $this->role;
    }
}