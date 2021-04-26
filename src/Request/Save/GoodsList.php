<?php

namespace DTK\Request\Save;

use DTK\Request\Request;

/**
 * 商品列表
 *
 * 应用场景：构建商品库，就首次将所有商品全量入库，后续可通过实定时拉取、失效商品、商品更新等接口保证商品增量和商品的信息同步
 * 接口说明：该接口返回筛选条件内的所有商品列表和商品信息
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=5
 * @package DTK\Request\Save
 */
class GoodsList extends Request
{
    protected string $api = 'goods/get-goods-list';
    protected string $version = 'v1.2.3';
}
