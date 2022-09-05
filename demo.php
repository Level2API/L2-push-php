<?php

use Sa\Rpc\Cli\Proxy\ProxyClient;
use Sa\Rpc\Entity\PBVoid;
use Sa\Rpc\Entity\PBString;
use Grpc\ChannelCredentials;


class GrpcService
{
    // 设置代理服务器监听的地址和端口
    public function __construct()
    {
        $this->host = 'localhost:8090';
        $this->client = new ProxyClient($this->host, [
            'credentials' => ChannelCredentials::createInsecure()
        ]);
    }
    
    // 查询订阅
    public function getSubscription()
    {
        $arg = new PBVoid();
        [$response, $status] = $this->client->GetSubscription($arg)->wait();
        
        print_r($response);
    }
    
    // 新增订阅
    public function addSubscription()
    {
        $arg = new PBString();
        $arg->setValue("2_000002_1");
        [$response, $status] = $this->client->AddSubscription($arg)->wait();
        
        print_r($response);
    }
    
    // 取消订阅
    public function delSubscription()
    {
        $arg = new PBString();
        $arg->setValue("2_000002_1");
        [$response, $status] = $this->client->DelSubscription($arg)->wait();
        
        print_r($response);
    }
    
    // 推送逐笔成交行情数据
    public function newTickRecordStream()
    {
        $arg = new PBVoid();
        $res = $this->client->NewTickRecordStream($arg);
        $stream = $res->responses();
        
        foreach ($stream as $v) {
            print_r($v);
        }
    }
    
    // 推送逐笔委托行情数据
    public function newOrderRecordStream()
    {
        $arg = new PBVoid();
        $res = $this->client->NewOrderRecordStream($arg);
        
        $stream = $res->responses();
        foreach ($stream as $v) {
            print_r($v);
        }
    }
    
    // 推送委托队列行情数据
    public function newOrderQueueRecordStream()
    {
        $arg = new PBVoid();
        $res = $this->client->NewOrderQueueRecordStream($arg);
        
        $stream = $res->responses();
        foreach ($stream as $v) {
            print_r($v);
        }
    }
    
    // 推送股票十档行情行情数据
    public function newStockQuoteRecordStream()
    {
        $arg = new PBVoid();
        $res = $this->client->NewStockQuoteRecordStream($arg);
        
        $stream = $res->responses();
        foreach ($stream as $v) {
            print_r($v);
        }
    
}
