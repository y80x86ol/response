<?php

/**
 * 通用响应类
 */
namespace Y80x86ol\Response;

class Response {
    private $uri = "";
    private $message = "";
    private $code = 0;//0=无错误，1=普通错误
    private $data = array();

    /**
     * 字符串输出
     * @return string
     */
    public function __toString() {
        return "This is a response class";
    }

    /**
     * 克隆
     */
    public function __clone() {
        die("can't clone this class");
    }

    /**
     * 初始化
     * @param string $uri
     * @param string $message
     * @return $this
     */
    public function init($uri = "", $message = "") {
        $this->uri = $uri;
        $this->message = $message;
        return $this;
    }

    /**
     * 设置uri
     * @param string $uri
     * @return $this
     */
    public function setUri($uri) {
        $this->uri = $uri;
        return $this;
    }

    /**
     * 设置code
     * @param int $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * 设置message
     * @param string $message
     * @return $this
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * 设置data
     * @param array $data
     * @return $this
     */
    public function setData($data = array()) {
        $this->data = $data;
        return $this;
    }

    /**
     * 输出json格式数据
     * @return string
     */
    public function json() {
        $outputData = $this->getOutputData();
        return json_encode($outputData);
    }

    /**
     * 组装最终输出数据
     * @return array
     */
    private function getOutputData() {
        $outputData = array(
            "uri" => $this->uri,
            "code" => $this->code,
            "message" => $this->message,
            "data" => $this->data
        );
        return $outputData;
    }
}