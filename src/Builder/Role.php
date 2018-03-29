<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/3/29
 * Time: 上午12:54
 */
namespace ShWang\DesignPattern\Builder;

class Role
{
    protected $head = null;
    protected $face = null;
    protected $body = null;
    protected $hp = null;
    protected $sp = null;
    protected $mp = null;

    public function setHead (string $head) {
        $this->head = $head;
    }

    public function getHead () {
        return $this->head;
    }

    public function setFace (string $face) {
        $this->face = $face;
    }

    public function getFace () {
        return $this->face;
    }

    public function setBody (string $body) {
        $this->body = $body;
    }

    /**
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param null $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return null
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param null $mp
     */
    public function setMp($mp)
    {
        $this->mp = $mp;
    }

    /**
     * @return null
     */
    public function getMp()
    {
        return $this->mp;
    }

    public function setSp (string $sp) {
        $this->sp = $sp;
    }

    /**
     * @return null
     */
    public function getSp()
    {
        return $this->sp;
    }
}