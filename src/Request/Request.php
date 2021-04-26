<?php

namespace DTK\Request;

abstract class Request
{
    /**
     * @var array 公共请求参数
     */
    protected array $params = [];

    /**
     * @var string api接口版本号
     */
    protected string $version = 'v1.0.0';

    /**
     * @var string 接口地址
     */
    protected string $api = '';

    /**
     * @var string 请求方式
     */
    protected string $requestMethod = 'GET';

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getApi()
    {
        return $this->api;
    }

    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function response(array $data)
    {
        return $data['data'];
    }

    public function makeSign($data, $appSecret)
    {
        ksort($data);
        $str = '';
        foreach ($data as $k => $v) {
            $str .= '&'.$k.'='.$v;
        }
        $str = trim($str, '&');
        return strtoupper(md5($str.'&key='.$appSecret));
    }
}
