<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: pzl
 * Date: 2023/10/25
 * Time: 14:40
 * Features:
 */
namespace Chbook4\ServiceApi;


/**
 * 产品定时任务
 */
interface ZxtProductTaskRpcServiceInterface
{
    /**
     * 超时取消订单
     *
     * @param array $params
     *
     * @return array
     */
    public function autoCancelOrder(array $params): array;

    /**
     * 自动回滚并发按天并发数
     *
     * @param array $params
     *
     * @return array
     */
    public function autoBackOrderItem(array $params): array;

}