<?php


namespace DTK\Request\Search;


use DTK\Request\Request;

/**
 * 联想词
 *
 * 应用场景：用户使用搜索功能输入关键词时联想更多属性词汇，减少用户输入。如输入裤子，联出：裤子男，裤子套装
 * 接口说明：该接口返回关键词的关联词汇，建议用户停止输入时调用接口返回联想词
 * @link http://www.dataoke.com/kfpt/api-d.html?id=18
 * @package DTK\Request\Search
 */
class SearchSuggestion extends Request
{
    protected string $api = 'goods/search-suggestion';
    protected string $version = 'v1.0.2';
}
