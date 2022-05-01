<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\tests\functional;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use hiqdev\yii\compat\yii;

class TestEndpointsTest extends \PHPUnit\Framework\TestCase
{
    protected static Client $client;

    public static function setUpBeforeClass(): void
    {
        $hosts = explode(',', yii::getApp()->params['HOSTS']);
        $host = reset($hosts);
        $host = 'hiapi.advancedhosting.com';
        static::$client = static::buildClient("https://$host");
        try {
            static::$client->request('GET', '');
        } catch (ConnectException $e) {
            static::$client = static::buildClient("http://$host");
        }
    }

    public function testFullEmptyEndpoint()
    {
        $data = $this->request('fullEmptyEndpoint');
        $this->assertSame([], $data);
    }

    public function testTestRemoteAddrEndpoint()
    {
        $IP = '1.1.1.1';
        $data = $this->request('testRemoteAddrEndpoint', [
            "X-Forwarded-For: $IP",
        ]);
        $remoteAddr = $data['REMOTE_ADDR'] ?? 'x';
        $this->assertNotEquals($IP, $remoteAddr);
    }

    protected function request(string $path, array $headers = [])
    {
        $url = $path;
        $response = static::$client->request('GET', $url, [
            'headers' => $headers,
        ]);

        $this->assertSame(200, $response->getStatusCode());
        $types = $response->getHeader('Content-Type');
        $this->assertSame('application/json; charset=UTF-8', reset($types));

        return json_decode($response->getBody(), true);
    }

    protected static function buildClient(string $uri): Client
    {
        return new Client([
            'base_uri' => $uri,
        ]);
    }
}
