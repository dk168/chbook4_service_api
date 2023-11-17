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

    /**
     * 是否已开通微信发货信息管理
     *
     * @return bool
     */
    public function isWxDeliver(): bool;

    /**
     * 微信发货信息管理录入
     *
     * @param string $order_sn
     * @param int    $logistics_type
     * @param string $item_desc
     * @param string $openid
     * @param string $tracking_no
     * @param string $express_company
     *
     * @return array
     */
    public function wxOrderDeliver(string $order_sn, int $logistics_type, string $item_desc, string $openid, string $tracking_no = "", string $express_company = ""): array;

    /**
     * 微信
     *
     * @param string $transaction_id
     *
     * @return bool
     */
    public function wxOrderIsComplete(string $transaction_id): bool;
}