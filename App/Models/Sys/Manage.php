<?php
namespace Backend\Models\Sys;

use Backend\Models\Base;

class Manage extends Base
{
    public function initialize()
    {
    }

    /**
     * @var int $id
     */
    public $id;

    public function getSource()
    {
        return 'auth_ms';
    }

    /**
     * 添加系统服务信息
     *
     * @param $entity
     *
     * @return bool|int
     *
     */
    public function add($entity) : ?int
    {
        if ($this->db()->insertAsDict(self::getSource(), $entity)) {
            return $this->db()->lastInsertId();
        }
        return false;
    }

    /**
     * 修改系统信息
     *
     * @param $entity
     * @param $id
     *
     * @return int|null
     */
    public function edit($entity, $id) : ?int
    {
        if ($this->db()->updateAsDict(self::getSource(), $entity, 'id = ' . intval($id))) {
            return true;
        }
        return false;
    }
}