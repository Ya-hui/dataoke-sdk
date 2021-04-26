<?php


namespace DTK\Request\Characteristic;


use DTK\Request\Request;

/**
 * 轮播图
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=72
 * @package DTK\Request\Characteristic
 */
class CarouseList extends Request
{
    protected string $api = 'goods/topic/carouse-list';
    protected string $version = 'v2.0.0';
}
