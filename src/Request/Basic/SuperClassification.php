<?php

namespace DTK\Request\Basic;

use DTK\Request\Request;

/**
 * 超级分类
 *
 * 应用场景：用于搭建网站或app的分类筛选功能
 * 接口说明：该接口返回大淘客所有的一级分类和二级分类，且提供一级分类图标及二级分类图标素材
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=10
 * @package DTK\Request\Basic
 */
class SuperClassification extends Request
{
    protected string $api = 'category/get-super-category';

}
