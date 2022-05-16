<?php

namespace Chbook4\ServiceApi;

interface AmqpProducerInterface {
    /**
     * 投递消息到消息队列
     *
     * @param string $host         客户host
     * @param string $data         数据
     * @param string $channel      队列名称
     * @param int    $delayTime    延迟时间，单位秒
     * @param int    $queue_region 队列区域，为0则获取当前客户设置的区域
     *
     * @return array
     */
    public function producer(string $host, string $data, string $channel, int $delayTime, int $queue_region = 0): array;

}