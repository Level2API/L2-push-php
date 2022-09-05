<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Sa\Rpc\Cli\Proxy;

/**
 */
class ProxyClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 查询订阅
     * @param \Sa\Rpc\Entity\PBVoid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSubscription(\Sa\Rpc\Entity\PBVoid $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sa.rpc.cli.proxy.Proxy/GetSubscription',
        $argument,
        ['\Sa\Rpc\Cli\Proxy\SubscriptionRsp', 'decode'],
        $metadata, $options);
    }

    /**
     * 新增订阅
     * @param \Sa\Rpc\Entity\PBString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSubscription(\Sa\Rpc\Entity\PBString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sa.rpc.cli.proxy.Proxy/AddSubscription',
        $argument,
        ['\Sa\Rpc\Cli\Proxy\Rsp', 'decode'],
        $metadata, $options);
    }

    /**
     * 取消订阅
     * @param \Sa\Rpc\Entity\PBString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DelSubscription(\Sa\Rpc\Entity\PBString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sa.rpc.cli.proxy.Proxy/DelSubscription',
        $argument,
        ['\Sa\Rpc\Cli\Proxy\Rsp', 'decode'],
        $metadata, $options);
    }

    /**
     * 推送逐笔成交行情数据
     * @param \Sa\Rpc\Entity\PBVoid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function NewTickRecordStream(\Sa\Rpc\Entity\PBVoid $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/sa.rpc.cli.proxy.Proxy/NewTickRecordStream',
        $argument,
        ['\Sa\Rpc\Entity\TickRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * 推送逐笔委托行情数据
     * @param \Sa\Rpc\Entity\PBVoid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function NewOrderRecordStream(\Sa\Rpc\Entity\PBVoid $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/sa.rpc.cli.proxy.Proxy/NewOrderRecordStream',
        $argument,
        ['\Sa\Rpc\Entity\OrderRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * 推送委托队列行情数据
     * @param \Sa\Rpc\Entity\PBVoid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function NewOrderQueueRecordStream(\Sa\Rpc\Entity\PBVoid $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/sa.rpc.cli.proxy.Proxy/NewOrderQueueRecordStream',
        $argument,
        ['\Sa\Rpc\Entity\OrderQueueRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * 推送股票十档行情行情数据
     * @param \Sa\Rpc\Entity\PBVoid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function NewStockQuoteRecordStream(\Sa\Rpc\Entity\PBVoid $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/sa.rpc.cli.proxy.Proxy/NewStockQuoteRecordStream',
        $argument,
        ['\Sa\Rpc\Entity\StockQuoteRecord', 'decode'],
        $metadata, $options);
    }

}
