<?php
/**
 * Created by WeiYongQiang.
 * User: weiyongqiang <hayixia606@163.com>
 * Date: 2019-04-17
 * Time: 22:54
 */

namespace Peter\Permission\rbac\validate;


use think\Validate;

class RoleVerify extends Validate
{
    protected $rule = [
        'name' => 'require|max:50|unique:peter\permission\rbac\model\role,name^id'
    ];

    protected $message = [
        'name.require' => '角色名不能为空',
        'name.max' => '角色名不能长于50个字符',
        'name.unique' => '角色名称不能重复'
    ];

}