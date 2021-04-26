<?php


namespace DTK\Request\Original;


use DTK\Request\Request;

/**
 * 细分类目合集
 *
 * 应用场景：可用于搭建细分类目榜单（如美食下-螺蛳粉榜，电器下-空调榜）等
 * 接口说明：该接口返回大淘客所有的细分类目合集（如手机，螺蛳粉、电吹风）
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=68
 * @package DTK\Request\Original
 */
class DetailedCategories extends Request
{
    protected string $api = 'subdivision/get-list';
}
