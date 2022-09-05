<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/9/5
 * Time: 16:46
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 商城支付订单
 */
interface ScPayOrderRpcServiceInterface
{
    /**
     * 支付成功后回调处理
     *
     * @param array $ret_data
     * @param array $order_info
     * @param array $client_info
     *
     * @return array
     */
    public function wxPaySuccess(array $ret_data, array $order_info, array $client_info): array;
}