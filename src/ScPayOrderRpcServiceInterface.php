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
     * 支付结果主动查询并处理
     *
     * @param string $req_seq
     *
     * @return array
     */
    public function wxPayQuery(string $req_seq): array;
}