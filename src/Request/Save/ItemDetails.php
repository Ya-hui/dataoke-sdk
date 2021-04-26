<?php


namespace DTK\Request\Save;


use DTK\Request\Request;

/**
 * 单品详情
 *
 * 应用场景：用于查看某个具体商品的详细信息，帮助用户购买决策。可构建单品详情页
 * 接口说明：通过大淘客商品id或淘宝商品id查询商品详细信息
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=8
 * @package DTK\Request\Save
 */
class ItemDetails extends Request
{
    protected string $api = 'goods/get-goods-details';
    protected string $version = ' v1.2.3';
}
