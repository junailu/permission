<?php
/**
 * Created by WeiYongQiang.
 * User: weiyongqiang <hayixia606@163.com>
 * Date: 2019-04-17
 * Time: 22:52
 */

namespace Peter\Permission\rbac\model;


use think\Model;

class Base extends Model
{
    protected $connection = '';

    public function __construct($db = '', $data = [])
    {
        parent::__construct($data);
        $this->connection = $db;
    }

}