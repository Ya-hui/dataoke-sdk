# dataoke-sdk

#### 介绍

对大淘客api的一层封装

http://www.dataoke.com/kfpt/api-market.html

#### 安装教程

```sh
composer require wyhv/dataoke
```

#### 使用说明

```php

use DTK\Client;

// $client = Client::getInstance(APP_KEY, APP_SECRET);

/**
 * 超级分类
 * @link http://www.dataoke.com/kfpt/api-d.html?id=10
 */
//$body = $client->run(new DTK\request\Basic\SuperClassification());

/**
 * 细分类目合集
 * @link http://www.dataoke.com/kfpt/api-d.html?id=68
 */
//$body = $client->run(new \DTK\Request\Original\DetailedCategories(['cid' => 1, 'pageId' => 1, 'pageSize' => 20]));

/**
 * 商品列表
 * @link http://www.dataoke.com/kfpt/api-d.html?id=5
 */
//$body = $client->run(new \DTK\Request\Save\GoodsList(['pageId' => 1, 'cids' => '1']));


/**
 * 单品详情
 * @link http://www.dataoke.com/kfpt/api-d.html?id=8
 */
//$body = $client->run(new \DTK\Request\Save\ItemDetails(['id' => 32578306]));


/**
 * 9.9 包邮精选
 * @link http://www.dataoke.com/kfpt/api-d.html?id=15
 * @var [type]
 */
// $body = $client->run(new \DTK\Request\Characteristic\NineGoodsList(['pageSize' => 20, 'pageId' => 1, 'nineCid' => 1]));


/**
 * 轮播图
 * @link http://www.dataoke.com/kfpt/api-d.html?id=72
 * @var [type]
 */
// $body = $client->run(new \DTK\Request\Characteristic\CarouseList());

/**
 * 联想词
 * @link http://www.dataoke.com/kfpt/api-d.html?id=18
 */
// $body = $client->run(new \DTK\Request\Search\SearchSuggestion(['keyWords' => '裤子', 'type' => 1]));

echo '<pre>';

print_r($body);


```
