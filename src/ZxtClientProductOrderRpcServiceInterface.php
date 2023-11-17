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
 * 产品订单
 */
interface ZxtClientProductOrderRpcServiceInterface
{
    /**
     * 获取下单参数
     *
     * @param array $params
     *
     * @return array
     */
    public function getPayOrderInfo(array $params): array;

    /**
     * 获取订单价格
     *
     * @param array $params
     *
     * @return array
     */
    public function getOrderPrice(array $params): array;

    /**
     * 获取优惠券列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getCouponList(array $params): array;

    /**
     * 创建订单
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrder(array $params): array;

    /**
     * 订单支付
     *
     * @param array $params
     *
     * @return array
     */
    public function orderPay(array $params): array;

    /**
     * 取消订单
     *
     * @param array $params
     *
     * @return array
     */
    public function orderQuery(array $params): array;

    /**
     * 取消订单
     *
     * @param array $params
     *
     * @return array
     */
    public function cancelOrder(array $params): array;

    /**
     * 获取订单列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getOrderList(array $params): array;

}