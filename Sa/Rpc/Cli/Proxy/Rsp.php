<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/tx-push/proxy.proto

namespace Sa\Rpc\Cli\Proxy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sa.rpc.cli.proxy.Rsp</code>
 */
class Rsp extends \Google\Protobuf\Internal\Message
{
    /**
     *消息ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     *响应码,见数据字典
     *
     * Generated from protobuf field <code>int32 code = 2;</code>
     */
    protected $code = 0;
    /**
     *响应消息，如错误消息
     *
     * Generated from protobuf field <code>string msg = 3;</code>
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *          消息ID
     *     @type int $code
     *          响应码,见数据字典
     *     @type string $msg
     *          响应消息，如错误消息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\TxPush\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     *消息ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *消息ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     *响应码,见数据字典
     *
     * Generated from protobuf field <code>int32 code = 2;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *响应码,见数据字典
     *
     * Generated from protobuf field <code>int32 code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     *响应消息，如错误消息
     *
     * Generated from protobuf field <code>string msg = 3;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *响应消息，如错误消息
     *
     * Generated from protobuf field <code>string msg = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}

