<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午9:55
 */

namespace ShWang\DesignPattern\Builder;

class Director
{
    public function __construct(RoleBuilder $builder)
    {
        $builder->buildFace();
        $builder->buildHead();
        $builder->buildBody();
        $builder->buildHp();
        $builder->buildMp();
        $builder->buildSp();
    }
}