<?php

namespace DTK;

use DTK\Request\Request;

class Client
{
    protected string $appKey;
    protected string $secret;

    /**
     * @var string 请求地址
     */
    protected string $requestAddress = 'https://openapi.dataoke.com';

    protected static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance($appKey, $secret): Client
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
            self::$instance->appKey = $appKey;
            self::$instance->secret = $secret;
        }
        return self::$instance;
    }

    /**
     * 发起请求
     *
     * @param  Request  $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    public function run(Request $request)
    {
        $params = $request->getParams();
        // 拼接参数
        $data['appKey'] = $this->appKey;
        $data['version'] = $request->getVersion();
        $data = array_merge($data, $params);
        $data['sign'] = $request->makeSign($data, $this->secret);

        $client = new \GuzzleHttp\Client(
            [
                'debug' => false,
                'base_uri' => 'https://openapi.dataoke.com/api/'
            ]
        );
        switch (mb_strtoupper($request->getRequestMethod())) {
            default:
                $response = $client->get($request->getApi(), ['query' => $data]);
        }
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('响应出错', $response->getStatusCode());
        }

        $body = json_decode($response->getBody(), JSON_UNESCAPED_UNICODE);

        if ($body['code'] != 0) {
            throw new \Exception($response->getBody());
        }
        return $request->response($body);
    }
}
