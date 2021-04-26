<?php


namespace DTK\Request\Characteristic;


use DTK\Request\Request;

/**
 * 9.9 包邮精选
 *
 * @link http://www.dataoke.com/kfpt/api-d.html?id=15
 * @package DTK\Request\Characteristic
 */
class NineGoodsList extends Request
{
    protected string $api = 'goods/nine/op-goods-list';
    protected string $version = 'v2.0.0';

    public function response(array $data)
    {
        return $data['data']['list'];
    }
}
